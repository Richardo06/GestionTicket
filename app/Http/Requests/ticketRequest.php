<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ticketRequest extends FormRequest
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
            'directionService' => 'required',
            'description' => 'required',
            'batiment' => 'required',
            'numeroPort' => 'required',
            'solutionProposer' => 'required',
        ];
    }
    public function messages()
    {
        return[
            'directionService' => 'Direction ou Service incorrect',
            'description' => 'Description ou requis incorrect',
            'batiment' => 'batiment requis',
            'numeroPort' => 'Numéro de porte requis ou incorrect',
            'solutionProposer' => 'Proposer une solution'
        ];
    }
}
