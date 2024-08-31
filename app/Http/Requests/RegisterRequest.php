<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\NameRule;
use App\Rules\EmailRule;
use App\Rules\PasswordRule;
use App\Rules\SavingsRule;

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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', new NameRule()],
            'email' => ['required', 'string', new EmailRule(), 'max:255', 'unique:users'],
            'password' => ['required', 'string', new PasswordRule(), 'confirmed'],
            'savings' => ['required', 'integer', new SavingsRule(), 'min:0'],
        ];
    }
}
