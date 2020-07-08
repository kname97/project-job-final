<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createAvatar extends FormRequest
{
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
            'avatar' =>'image|max:2048'
        ];
    }
    function messages()
    {
        return [

            'avatar.image' => 'Ảnh đại diện phải là hình ảnh',
            'avatar.max'   => 'ảnh tải lên quá dung lượng cho phép'
        ];
    }
}
