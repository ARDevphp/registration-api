<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequests extends FormRequest
{
    public function messages()
    {
        return [
            'email' => 'такой адрес электронной почты существует',
            'password' => 'пароль должен быть длиной не менее 6 символов',
            'gender' => 'определите свой пол'
        ];
    }

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'gender' => 'required|string'
        ];
    }
}
