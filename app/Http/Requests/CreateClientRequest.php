<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string',
            'middle_name' => 'required|string',
            'last_name' => 'required|string',
            'address' => 'required|string',
            'contact_number' => 'required|string',
            'type' => 'required|in:0,1',
            'route' => 'required|in:San Isidro,Patun-An,Bantayanon,Lo-ok,Calampisawan,Suba',
            'status' => 'required|in:0,1',
            'stub_number' => 'required|numeric',
            'meter_number' => 'required|numeric',
            'first_meter_reading' => 'required|string'
        ]; 
    }
}
