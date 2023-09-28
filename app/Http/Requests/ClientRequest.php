<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'nom' => 'required|min: 8',
            'prenom' => 'required|min: 8',
            'email' => 'required|email',
            'numero' => 'required|min: 10',
            'fonction' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'nom.required' => 'Nom requis ou incorrect',
            'nom.min' => 'le nom doit comporter au moins 8 caractères',
            'prenom.required' => 'prenom requis ou incorrect',
            'prenom.min' => 'le prenom doit comporter au moins 8 caractères',
            'email.required' => 'Email requis ou incorrect',
            'numero.required' => 'Numéro requis ou incorrect',
            'numero.min' => 'le numéro doit compoerter au moins 10 caractères',
            'fonction.required' => 'Fonction requis ou incorrect'
            
        ];
    }
}
