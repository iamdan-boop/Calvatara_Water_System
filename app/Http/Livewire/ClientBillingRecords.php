<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientBillingRecords extends Component
{

    public $search;

    protected $queryString = ['search'];

    public $clientId;

    public function render()
    {
        return view('livewire.client-billing-records', [
            'client' => Client::find($this->clientId),
        ]);
    }
}
