<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createProfile extends FormRequest
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
            'txtfirstname'=>'required',
            'txtlastname'=>'required',
            'txtaddress'=>'required',
            'gender'=>'required',
            'txtdob'=>'required',
            'txtphone'=>'required|numeric',
            'txtcity'=>'required',
            'txtdistrict'=>'required',
//            'description'=>'required'
//            'txtpassword' => 'required|min:5|confirmed',
        ];
    }
    function messages()
    {
        return [
            'txtfirstname.required'=>'bạn chưa nhập họ' ,
            'txtlastname.required'=>'bạn chưa nhập tên' ,
            'txtaddress.required'=>'bạn chưa nhập địa chỉ' ,
            'gender.required'=>'bạn chưa chọn giới tính' ,
            'txtdob.required'=>'bạn chưa nhập ngày sinh' ,
            'txtphone.required'=>'bạn chưa nhập số điện thoại',
            'txtphone.numeric'=>'Cần phải nhập số cho số điện thoại',
            'txtcity.required'=>'bạn chưa chọn thành phố',
            'txtdistrict.required'=>'bạn chưa chọn quận huyện',
//            'description.required'=>'bạn chưa nhập họ',
            'txtpassword.required' => 'Bạn chưa nhập mật khẩu',
            'txtpassword.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự',
            'txtpassword.confirmed' => 'Mật khẩu không trùng khớp',
        ];
    }
}
