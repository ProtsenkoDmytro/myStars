<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientsRequest extends FormRequest
{
    /**
    @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
    @return array
     */
    public function rules()
    {
        return [
            'clients_password'=>'required|string',
            'clients_name'=>'required|string',
            'clients_surname'=>'required|string',
            'clients_number'=>'required|string',
            'clients_email'=>'required|string'

            //
        ];
    }
}
