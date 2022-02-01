<?php

namespace App\Http\Livewire;

use App\Models\Client;
use Livewire\Component;

class ClientBills extends Component
{

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        if ($this->search == NULL) {
            return view('livewire.client-bills', [
                'clients' => Client::all(),
            ]);
        }
        return view('livewire.client-bills', [
            'clients' => Client::where('route', 'like', '%'. $this->search. '%')
                ->orWhere('address', 'like', '%'. $this->search. '%')->get(), 
        ]);
    }
}
