<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class postJob extends FormRequest
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
            'title-job' => 'required|unique:posts|max:255',
            'select-categoryJob' => 'required',
            'type-job' => 'required',
            'minsalary' => 'numeric',
            'maxsalary' => 'numeric',
            'negotiable' => 'between1:2',


        ];
    }

    function messages()
    {
        return [

        ];
    }
}
