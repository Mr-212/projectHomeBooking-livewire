<?php
/**
 * Created by PhpStorm.
 * User: ali
 * Date: 12/31/20
 * Time: 1:29 PM
 */

namespace App\RepoHandlers;


use App\Constants\ClientStatusConstant;
use App\Constants\PropertyStatusConstant;
use App\Models\Client;
use App\Models\PreClosingChecklist;
use App\Models\Property;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ClientPropertyChecklistHandler
{
    private $client,$property,$pre_closing;
    private $client_id, $property_id;

    public function __construct($client_id = null, $property_id = null)
    {
         $this->client = $client_id ? Client::find($client_id) : null;
         $this->property = $property_id ? Property::find($property_id) : null;
    }


    public function getClient(){
        return $this->client = $this->client ? : (isset($this->property->client) ? $this->property->client: new Client());

    }

    public function getProperty(){
        return $this->property = $this->property ? :  new Property();
    }

    public function getPreClosingList(){
        return $this->pre_closing = $this->pre_closing ? : ($this->property->pre_closing ? : new PreClosingChecklist());
    }

    public function  setClient(CLient $client){
        $this->client = $client;
    }

    public function  setProperty(Property $property){
        $this->property = $property;
    }

    public function  setPreClosingList(PreClosingChecklist $pre_closing){
        $this->pre_closing = $pre_closing;
    }



    public function save(){
        $isSave = false;
        try{
            DB::beginTransaction();
            if(isset($this->client) && $this->client->isDirty()){
                $this->client->save();
            }
            if(isset($this->property) && (!empty($this->property->id) || $this->property->isDirty())){
                $this->property->client_id = $this->property->client_id?: ($this->client->id ?: null);
                $this->property->save();
            }
            if(isset($this->pre_closing) && (!empty($this->pre_closing->id) || $this->pre_closing->isDirty())) {
//                $this->pre_closing->client_id = $this->property->client_id?: ($this->client->id ?: null);
                $this->pre_closing->property_id = $this->pre_closing->property_id ?: ($this->property->id ?: null);

                $this->pre_closing->save();
            }
            DB::commit();
            $isSave = true;

        }catch (\Exception $e){
            dd($e);
            DB::rollBack();
            report($e);
        }

        return $isSave;
    }


    public function dropClient(){
        $error = true;
        try {
            DB::beginTransaction();
            $this->client? : $this->getClient();
            $this->client->status = ClientStatusConstant::CLIENT_DROPOUT;
            $this->property ? : $this->getProperty();
            if ($this->client->save()) {
//                $this->copyPropertyToDropoutClient();
                $clone_property = $this->property->replicate();
                $clone_property->parent_id = $this->property->id;
                $clone_property->property_status_id = PropertyStatusConstant::CLIENT_DROPOUT;
                if ($clone_property->save()) {
                    if (isset($this->getPreClosingList()->id) && !empty($this->getPreClosingList()->id)) {
                        $clone_pre_closing = $this->getPreClosingList()->replicate();
                        $clone_pre_closing->property_id = $clone_property->id;
                        $clone_pre_closing->save();
                    }
                    DB::commit();
                }
                $error = false;
            }
        }catch (\Throwable $e){
            DB::rollBack();
            report($e);
        }
        return $error;
    }

    public function copyPropertyToDropoutClient(){

        try {
            $clone_property = $this->property->replicate();
            $clone_property->parent_id = $this->property->id;
            $clone_property->property_status_id = PropertyStatusConstant::CLIENT_DROPOUT;
//            $clone_property->client_id = $this->client->id;


            if ($clone_property->save()) {
                if (isset($this->getPreClosingList()->id) && !empty($this->getPreClosingList()->id)) {
                    $clone_pre_closing = $this->getPreClosingList()->replicate();
                    $clone_pre_closing->property_id = $clone_property->id;
                    $clone_pre_closing->save();
                }
            }
        }catch (\Exception $e){
            report($e);

        }
    }

    public function movePropertyToEvictionAndVacant(){
           $response = false;
        try{
            DB::beginTransaction();
            if($this->vacateProperty()) {
                $this->moveOutProperty();
                $response =  true;
            }

            DB::commit();
        }catch (\Throwable $e){
            DB::rollBack();
            dd($e);
            report($e);
        }
        return $response;

    }

    private function moveOutProperty(){
        try {
//        $this->client ? : $this->getClient();
            $this->property ? : $this->getProperty();

            if(!empty($this->property->id)) {
                $this->property->property_status_id = PropertyStatusConstant::HOUSE_EVICTED;
                $this->property->save();
            }
        }catch (\Throwable $e){

            report($e);
        }
    }

    private function vacateProperty(){

        $is_cloned = false;
        try {
//            $this->client ?: $this->getClient();
            $this->property ? : $this->getProperty();
            $clone_property = $this->property->replicate();
            $clone_property->property_status_id = PropertyStatusConstant::HOUSE_VACANT;
            $clone_property->parent_id = $this->property->id;
            $clone_property->client_id = NULL;
            $clone_property->move_out_date = Carbon::now()->toDateTimeString();

            if ($clone_property->save()) {
                $this->pre_closing ? : $this->getPreClosingList();
                $clone_pre_closing = $this->pre_closing->replicate();
                $is_cloned =  true;
                if (isset($clone_pre_closing->id) && !empty($clone_pre_closing->id)) {
                    $clone_pre_closing->property_id = $clone_property->id;
                    $clone_pre_closing->save();
                }
            }
        }catch (\Throwable $e){
            dd($e);
            report($e);
        }

        return $is_cloned;
    }





}