<?php

namespace App\Http\Livewire;

use App\Models\Bills;
use App\Models\Client;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class ClientBillingRecords extends Component
{

    public $search;

    protected $queryString = ['search'];

    public $clientId;

    public function render()
    {
        if ($this->search == null || $this->search == '') {
            return view('livewire.client-billing-records', [
                'client' => Client::find($this->clientId),
                'bills' => Bills::all(),
            ]);
        }
        return view('livewire.client-billing-records', [
            'client' => Client::find($this->clientId),
            'bills' => Bills::where('cubic_meter', 'like', '%'. $this->search . '%')
                ->orWhere('bill_amount', 'like', '%'. $this->search . '%')
                ->orWhere('status', '=', $this->search == 'Paid' ? 1 : 0 )
                ->get()
        ]);
    }


    public function updateBill($billId) {
        $bill = Bills::find($billId);

        if ($bill->status == 0) {
            $bill->update(['status' => 1]);
        } else {
            $bill->update(['status' => 0]);
        }
        $bill->refresh();
    }


    public function deleteBill($billId) {
        Bills::destroy($billId);
    }



    public function printBill($billId) {
        $bill = Bills::find($billId);

        $pdf = Pdf::loadView('pdf.bills', $bill);
        return $pdf->download($bill->created_at);
    }
} 
