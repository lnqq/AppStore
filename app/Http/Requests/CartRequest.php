<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartRequest extends FormRequest
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
            'customer_id' => 'required',
        ];
    }
    //thiet lap cac thong diep
    public function messages()
    {
        return [
            'customer_id.required' => 'Khách Hàng Không được bỏ trống',
        ];
    }
}
