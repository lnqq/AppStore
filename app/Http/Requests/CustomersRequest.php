<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomersRequest extends FormRequest
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
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'email' => 'required|max:20',
            'postal_address' => 'required|max:50',
            'physical_address' => 'required|max:50'
        ];
    }

    //thiet lap cac thong diep
    public function messages()
    {
        return[
            'first_name.required' => 'Tên Không Được Để Trống',
            'last_name.required' => 'Họ Không Được Để Trống',
            'email.required' => 'Email Không Được Để Trống',
            'postal_address.required' => 'Địa Chỉ Bưu Điện Không Được Để Trống',
            'physical_address.required' => 'Địa Chỉ Nhà Không Được Để Trống'
        ];
    }
}
