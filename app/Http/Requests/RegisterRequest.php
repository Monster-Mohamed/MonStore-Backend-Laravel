<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "phone_number" => "required|unique:users",
            "phone_country" => "required",
            "name" => "required|min:5",
            "email" => "required|unique:users|email",
            "password" => "required|min:6|confirmed",
        ];
    }
}
