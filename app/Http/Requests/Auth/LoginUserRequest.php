<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
{
    public function rules()
    {
        return [
            'login' => ['required', 'max:254'],
            'password' => ['required'],
        ];
    }

    public function authorize()
    {
        return true;
    }
}
