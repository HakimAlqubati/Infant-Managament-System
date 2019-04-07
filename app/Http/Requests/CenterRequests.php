<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CenterRequests extends FormRequest
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
            'name' => 'required|unique:Center',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'onwer_name' => 'required',
//            'media' =>'nullable',
//            'profile'=>'nullable',
//            'notes'=>'nullable',
        ];
    }
}
