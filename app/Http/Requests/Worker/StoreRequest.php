<?php

namespace App\Http\Requests\Worker;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string',
            'surname' => 'required|string',
            'email' => 'required|email',
            'age' => 'nullable|integer',
            'description' => 'nullable|string',
            'is_married' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Поле "Имя" является обязательным.',
            'name.string' => 'Поле "Имя" должно быть строкой.',
            'surname.required' => 'Поле "Фамилии" является обязательным.',
            'surname.string' => 'Поле "Фамилии" должно быть строкой.',
            'email.required' => 'Поле "email" является обязательным.',
            'email.string' => 'Поле должно быть электронным адресом.',
            'age.string' => 'Поле должно быть числом.',
            'description.string' => 'Поле должно быть строкой.',
            'is_married.string' => 'Поле должно быть строкой.',
        ];
    }
}
