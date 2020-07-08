<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createAvartar extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'avatar' =>'image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }
    function messages()
    {
        return [
            'avatar.image' => 'Ảnh đại diện phải là hình ảnh',
            'avatar.mimes' => 'Không đúng định dạng hình ảnh',
            'avatar.max'   => 'ảnh tải lên quá dung lượng cho phép'
        ];
    }
}
