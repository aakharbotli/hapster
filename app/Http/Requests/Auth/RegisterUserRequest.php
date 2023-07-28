<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'company_id' => ['required', 'exists:companies,id'],
            'first_name' => ['required','string'],
            'last_name' => ['required','string'],
            'username' => ['required','unique:users,username'],
            'phone_number' => ['required'],
            'avatar' => ['nullable',],
            'email' => ['required', 'email', 'max:254','unique:users,email'],
            'email_verified_at' => ['nullable', 'date'],
            'password' => ['required','confirmed'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
