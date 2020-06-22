<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class updatePassword extends FormRequest
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

//            'description'=>'required'
            'new_password' => 'required|min:5|confirmed',
        ];
    }
    function messages()
    {
        return [
            'new_password.required' => 'bạn chưa nhập mật khẩu',
            'new_password.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự',
            'new_password.confirmed' => 'Mật khẩu không trùng khớp',
//            'new_password.different' => 'Mật khẩu không nên đặt trùng với mật khẩu cũ',

        ];
    }
}
