<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createJob extends FormRequest
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
            'txttitle'=>'required|max:60',
            'txtcategoryJob'=>'required',
            'typejob'=>'required',
            'startdate'=>'required|date',
            'enddate'=>'required|date|after:startdate',
            'amount'=>'required|numeric',
            'minsalary'=>'numeric',
            'maxsalary'=>'numeric|gt:minsalary',
            'position'=>'required',
            'exp'=>'required',
            'location'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phone'=>'required|numeric',
//            'description'=>'required'
//            'txtpassword' => 'required|min:5|confirmed',
        ];
    }
    function messages()
    {
        return [
            'txttitle.required'=>'bạn chưa nhập tiêu đề' ,
            'txtcategoryJob.required'=>'bạn chưa chọn danh mục tuyển dụng' ,
            'startdate.required'=>'bạn chưa nhập ngày bắt đầu' ,
            'startdate.date'=>'không đúng định dạng ngày tháng' ,
            'enddate.required'=>'bạn chưa nhập ngày kêt thúc' ,
            'enddate.date'=>'không đúng định dạng ngày tháng' ,
            'enddate.after'=>'phải lớn hơn ngày bắt đầu' ,
            'amount.required'=>'bạn chưa nhập số lượng cần tuyển',
            'amount.numeric'=>'Cần phải nhập số cho số lượng càn tuyển',
            'position.required'=>'bạn chưa chọn chức vụ',
            'exp.required'=>'bạn chưa nhập yêu cầu kinh nghiệm',
            'minsalary.numeric'=>'lương tối thiểu phải là số',
            'maxsalary.numeric'=>'lương tối đa phải là số',
            'maxsalary.gt'=>'lương tối đa phải lớn hơn lương tối thiểu',
            'email.required'=>'bạn chưa nhập email',
            'location.required' => 'Bạn chưa chọn khu vực',
            'address.required' => 'bạn chưa nhập địa chỉ',
            'email.confirmed' => 'Mật khẩu không trùng khớp',
            'phone.required'=>'bạn chưa nhập số điện thoại',
            'phone.numeric'=>'Cần phải nhập số cho số điện thoại',
        ];
    }
}
