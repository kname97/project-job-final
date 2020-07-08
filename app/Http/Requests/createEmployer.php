<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createEmployer extends FormRequest
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
            'txtname'=>'required',
            'business_sector'=>'required',
//            'desciption'=>'required',
            'txtskype'=>'required',
            'txtphone'=>'required|numeric',
            'txtaddress'=>'required',
            'txtcity'=>'required',
            'txtdistrict'=>'required',
//            'description'=>'required'
//            'txtpassword' => 'required|min:5|confirmed',
        ];
    }
    function messages()
    {
        return [
            'txtname.required'=>'bạn chưa nhập tên công ty' ,
            'business_sector.required'=>'bạn chưa nhập lĩnh vực kinh doanh công ty' ,
            'txtaddress.required'=>'bạn chưa nhập địa chỉ' ,
//            'desciption.required'=>'bạn chưa nhập mô tả sơ bộ công ty' ,
            'txtskype.required'=>'bạn chưa nhập skype công ty' ,
            'txtphone.required'=>'bạn chưa nhập số điện thoại',

            'txtphone.numeric'=>'Cần phải nhập số cho số điện thoại',
            'txtcity.required'=>'bạn chưa chọn thành phố',
            'txtdistrict.required'=>'bạn chưa chọn quận huyện',
//            'description.required'=>'bạn chưa nhập họ',
//            'txtpassword.required' => 'Bạn chưa nhập mật khẩu',
//            'txtpassword.min' => 'Mật khẩu phải chứa ít nhất 5 ký tự',
//            'txtpassword.confirmed' => 'Mật khẩu không trùng khớp',
        ];
    }
}
