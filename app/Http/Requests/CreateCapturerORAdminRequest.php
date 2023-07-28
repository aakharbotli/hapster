<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCapturerORAdminRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
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
        'phone_number'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
        'roles'=>'required|array',
        'avatar'=>'image',
        'email'=>'required|email|max:50',
        'is_reset'=>'required|boolean',
        'password'=>['regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*(_|[^\w])).+$/','min:16','confirmed'],
        ];
    }
}
