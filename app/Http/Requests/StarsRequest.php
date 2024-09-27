<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StarsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
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
            'star_name'=>'required|string',
            'star_description'=>'required|string',
            'star_price'=>'required|string'



        ];
    }
}
