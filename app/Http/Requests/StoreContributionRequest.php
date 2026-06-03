<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContributionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'lastname' => 'required|string|max:255',
            'firstname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => ['required', 'regex:/^[0-9\+\-\s\(\)]{10,20}$/'],
            'profession' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1|max:999999.99',
            'projet_id' => 'required|integer|exists:projets,id',
            'message' => 'nullable|string|max:2000',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'lastname.required' => 'Le nom de famille est obligatoire.',
            'lastname.string' => 'Le nom de famille doit être une chaîne de caractères.',
            'lastname.max' => 'Le nom de famille ne doit pas dépasser 255 caractères.',
            'firstname.required' => 'Le prénom est obligatoire.',
            'firstname.string' => 'Le prénom doit être une chaîne de caractères.',
            'firstname.max' => 'Le prénom ne doit pas dépasser 255 caractères.',
            'email.required' => 'L\'adresse e-mail est obligatoire.',
            'email.email' => 'L\'adresse e-mail doit être valide.',
            'email.max' => 'L\'adresse e-mail ne doit pas dépasser 255 caractères.',
            'phone.required' => 'Le numéro de téléphone est obligatoire.',
            'phone.regex' => 'Le format du numéro de téléphone est invalide.',
            'profession.required' => 'La profession est obligatoire.',
            'profession.string' => 'La profession doit être une chaîne de caractères.',
            'profession.max' => 'La profession ne doit pas dépasser 255 caractères.',
            'location.required' => 'La localisation est obligatoire.',
            'location.string' => 'La localisation doit être une chaîne de caractères.',
            'location.max' => 'La localisation ne doit pas dépasser 255 caractères.',
            'amount.required' => 'Le montant est obligatoire.',
            'amount.numeric' => 'Le montant doit être un nombre.',
            'amount.min' => 'Le montant minimum est de 1.',
            'amount.max' => 'Le montant maximum est de 999 999,99.',
            'projet_id.required' => 'Le projet est obligatoire.',
            'projet_id.integer' => 'L\'identifiant du projet doit être un nombre entier.',
            'projet_id.exists' => 'Le projet sélectionné est invalide.',
            'message.string' => 'Le message doit être une chaîne de caractères.',
        ];
    }
}
