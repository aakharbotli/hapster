<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
        'first_name'=>'required',
        'last_name'=>'required',
        'username'=>'required|users:unique,username',
        'phone_number'=>'required',
        'avatar'=>'image',
        'email'=>'required|email|max:50',
        'password'=>['regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/','min:16'],
        ];
    }
}
