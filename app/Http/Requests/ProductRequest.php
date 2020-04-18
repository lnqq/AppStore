<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_code' => 'required|max:20|numeric',
            'product_name' => 'required|max:255',
            'price' => 'required|numeric|max:255',
            'promotional' => 'required|numeric',
            'brand_id' => 'required',
            'categorie_id' => 'required',
            'description' => 'required|min:2|max:255|'
        ];
    }
    //thiet lap cac thong diep
    public function messages()
    {
        return [
            'min' => ':attribute tối thiểu có 2 ký tự',
            'max' => ':attribute tối đa có 255 ký tự',
            'numeric' => ':attribute phải là một số ',
            'product_code.required' => 'Mã Sản Phẩm không được để trống',
            'product_name.required' => 'Tên Sản Phẩm không được để trống',
            'price.required' => 'Giá không được để trống',
            'promotional.required' => 'Giá Khuyến Mãi không được để trống',
            'brand_id.required' => 'Nhà Sản Xuất không được để trống',
            'categorie_id.required' => 'Danh Mục Sản Phẩm không được để trống',
            'description.required' => 'Mô Tả không được để trống',
        
        ];
    }
}
