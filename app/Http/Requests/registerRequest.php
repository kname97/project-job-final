<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class registerRequest extends FormRequest
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
            'txtemail' => 'required|email|string|unique:Users,email',
            'txtusername' => 'required|string|alpha_dash|unique:Users,username',
            'txtpassword' => 'required|min:5|confirmed',
            'txtlevel' => 'required',
        ];
    }
    function  messages()
    {
        return [
            'txtemail.required' => 'Bạn chưa nhập email',
            'txtemail.email' => 'Không đúng định dạng email',
            'txtemail.unique' => 'Email đã được tạo trước đó',
            // tạo email
            'txtusername.required' => 'Bạn chưa nhập tên tài khoản',
            'txtusername.unique' => 'Tài khoản đã được tạo trước đó',
            // 'username.array' => 'Tên tài khoản không được có dấu',
            'txtusername.alpha_dash' => 'Tên tài khoản không hợp lệ',
            //tao username
            'txtpassword.required' => 'Bạn chưa nhập mật khẩu',
            'txtpassword.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự',
            'txtpassword.confirmed' => 'Mật khẩu không trùng khớp',
            //tạo password
        ];
    }
}
