<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class inscriptRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'nomprenom' => 'required|min:8',
            
        ];
    }
    public function messages(): array
    {
    return [
        'email.required' => 'L\'email est  requis',
        'email.unique' => 'L\'email a déja un compte',
        'password.required' => 'Le mot de passe est requis',
        'password.min' => 'Le mot de passe doit contenir au moins 8 caractères',
        'nomprenom' => 'Le nom ou Prenom est requis',
        'nomprenom.min' => 'Le nom ou Prénom doit contenir au moins 8 caractères',

        
    ];
    }
}
