<?php

namespace AccessManager\Auth\Http\Requests;


use AccessManager\Base\Http\Requests\BaseFormRequest;

/**
 * Class AdminLoginRequest
 * @package AccessManager\Auth
 */
class AdminLoginRequest extends BaseFormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'username'  =>  ['required'],
            'password'  =>  ['required'],
        ];
    }
}