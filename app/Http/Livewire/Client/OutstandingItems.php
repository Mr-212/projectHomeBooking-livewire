<?php

namespace App\Http\Livewire\Client;

use App\Models\Client;
use Database\Seeders\CreateClientSeeder;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class OutstandingItems extends Component
{
    public $title,$item_type;

    public $item_checked_at = null;
    public $add_comment = null;
    public function mount($type)
    {
        $this->item_type = $type;
        $this->setTitle($type);

    }
    public function render()
    {
        $clients = Client::limit(5)->get();
        if(empty($clients) && env('APP_ENV') == 'development'){
            Artisan::call("db:seed", ['--class' => 'Database\Seeders\CreateClientSeeder']);
        }
        return view('livewire.client.outstanding-items',compact('clients'))
            ->extends('layouts.app');
    }

    private function setTitle($type){
        if($type == 'before_dd')
            $this->title = 'Outstanding Items Before Due Diligence';
        if($type == 'after_dd')
            $this->title = 'Outstanding Items After Due Diligence';
    }

}
