<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'numero' => 'required',
            'fonction' => 'required'
        ];
    }
    public function messages()
    {
        return[
            'nom.required' => 'Nom requis ou incorrect',
            'prenom.required' => 'prenom requis ou incorrect',
            'email.required' => 'Email requis ou incorrect',
            'numero.required' => 'Numéro requis ou incorrect',
            'fonction.required' => 'Fonction requis ou incorrect'
            
        ];
    }
}
