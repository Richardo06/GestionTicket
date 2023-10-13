<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateFormRequest extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|min:8',
            'nomprenom' => 'required|min:8',
            
        ];
    }
    public function messages(): array
    {
    return [
        'email.required' => 'Email  requis',
        'password.required' => 'Mot de passe  requis',
        'password.min' => 'Mot de passe doit contenir au moins 8 caractères',
        'nomprenom' => 'Nom ou Prenom requis',
        
    ];
    }
}
