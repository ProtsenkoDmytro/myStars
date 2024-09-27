<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalsRequest extends FormRequest
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
            'personal_password'=>'required|string',
            'personal_email'=>'required|string'

            //
        ];
    }
}
