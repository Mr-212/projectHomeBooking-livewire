<?php

namespace App\Http\Livewire\Client\House\Tables;

use App\Models\Client;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use App\Constants\PropertyStatusConstant;
use App\Models\Property;

class CancelledHouseTable extends LivewireDatatable
{
//    public $model = Client::class;

    public function builder()
    {
        return Property::query()->with('client','pre_closing')->CancelledHouse();
    }

    public function columns()
    {
        return [
            Column::callback(['id'], function ($id) {
                return view('livewire.property.tables.cancelled.action-index', ['property_id' => $id]);
            }),

            NumberColumn::name('id')
                ->defaultSort('id')
                ->label('ID'),

            Column::callback('property_status_id',function($stage){
                return PropertyStatusConstant::getValueByKey($stage);
            })->label('Stage'),

            Column::name('client.applicant_name')
                ->label('Applicant'),

//            Column::callback(['client.id','id','client.additional_tenant_name'], function($client_id, $property_id,$additional_tenant_name) {
//                return view('livewire.property.tables.cancelled.action-additional-tenant',
//                    [
//                        'client_id' => $client_id,
//                        'property_id'=> $property_id,
//                        'additional_tenant_name'=> $additional_tenant_name,
//                    ]);
//            })->label('Additional Tenant'),



            Column::name('house_number_and_street')
                ->label('House Address')
                ->filterable(),

            Column::name('city')
                ->label('City')
                ->filterable(),

            Column::name('state')
                ->label('State'),

            Column::name('county')
                ->label('County'),

            Column::name('zip')
                ->label('Zip'),


            Column::name('client.co_applicant_name')
                ->label('Co applicant Name'),

            Column::name('client.partner_name')
                ->label('Partner Name'),


        ];
    }

}