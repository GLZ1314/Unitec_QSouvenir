<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserAddressRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'FirstName'      => 'required',
            'LastName'       => 'required',
            'address'        => 'required',
            'MobilePhoneNumber'       => 'required',
            'WorkPhoneNumber'           => 'required',
            'HomePhoneNumber'  => 'required',
        ];
    }
}
