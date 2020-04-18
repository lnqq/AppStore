<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
             'name' => 'required|max:20',
            'description' => 'required|max:250'
        ];
    }
    //thiet lap cac thong diep
    public function messages()
    {
        return [
            'name.required' => 'Tên Danh Mục không được để trống',
            'description.required' => 'Mô Tả không được để trống'
        ];
    }
}
