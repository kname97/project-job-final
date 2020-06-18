<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class loginRequest extends FormRequest
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
            'email'=>"required",
            'password'=>'required'
        ];
    }
    function messages()
    {
        return [

            'email.required' => 'Bạn chưa nhập email hoặc tài khoản',
            'password.required' => 'Bạn chưa nhập mật khẩu',
        ];
    }
    function attributes()
    {
        return [
            'email' => 'Email hoặc tài khoản',
            'password' => 'Mật khẩu'
        ];
    }
}
