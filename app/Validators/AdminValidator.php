<?php

namespace App\Validators;

use App\Model\Entities\Admin;
use App\Validators\Base\BaseValidator;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class AdminValidator extends BaseValidator
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
        if (!empty(array_get($request, 'id', ''))) {
            if (array_get($request, 'password', '')) {
                $rules['password'] = 'bail|min:6|max:64';
            } else {
                $rules['password'] = 'bail';
            }

            $rules['email'] = 'bail|required|email|max:128|unique:admins,email,' . $request->id;
        }

        return $rules;
    }

    protected function failedValidation(Validator $validator)
    {
        $entity = new Admin();
        $entity->fill(request()->all());

        session()->flash('entity', $entity);

        return parent::failedValidation($validator);
    }
}