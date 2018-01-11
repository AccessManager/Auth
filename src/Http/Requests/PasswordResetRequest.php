<?php

namespace AccessManager\Auth\Http\Requests;


use AccessManager\Base\Http\Requests\BaseFormRequest;

/**
 * Class PasswordResetRequest
 * @package AccessManager\Auth
 */
class PasswordResetRequest extends BaseFormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'current_password'  =>  ['required'],
            'new_password'      =>  ['required', 'confirmed'],
        ];
    }
}