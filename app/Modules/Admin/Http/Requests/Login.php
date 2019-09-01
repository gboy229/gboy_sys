<?php

namespace App\Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Login extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
     public function rules()
    {
        return [
            //
            'username' => 'bail|required',
            'password' => 'bail|required',
            'captcha' => 'bail|required|captcha',
         ];
    }


     public function messages(){
        return [
            'username.required' => trans('admin::admin.not_exist'),
            'password.required'  => trans('admin::admin.not_exist'),
            'captcha.required'  => trans('admin::admin.not_exist'),
            'captcha.captcha'  => trans('admin::admin.checked_error'),
        ];
    }


    public function attributes()
    {
        return [
            'username'=>trans('admin::admin.username'),
            'password'=>trans('admin::admin.password'),
            'captcha'=>trans('admin::admin.captcha'),
        ];
    }


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
