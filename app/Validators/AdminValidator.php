<?php

namespace App\Validators;

use Illuminate\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class AdminValidator extends FormRequest
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
     * @param Request $request
     * @return array
     */
    public function rules(Request $request)
    {
        $rules = [
            'name' => 'required',
            'email' => 'bail|required|email|max:128|unique:admins',
            'password' => 'bail|required|min:6|max:64',
            'role_type' => 'required',
        ];

        // updating
        if (!empty($request->id)) {
            $rules['password'] = 'bail|min:6|max:64';
            $rules['email'] = 'bail|required|email|max:128|unique:admins, email, ' . $request->id;
        }


        return $rules;
    }

    public function messages()
    {
        return parent::messages();
    }
}