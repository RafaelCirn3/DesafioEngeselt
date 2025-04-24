<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConfeitariaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
{
    return [
        'nome' => 'required|string|max:255',
        'latitude' => 'required|numeric|between:-90,90',
        'longitude' => 'required|numeric|between:-180,180',
        'cep' => 'nullable|string',
        'rua' => 'nullable|string',
        'numero' => 'nullable|string',
        'bairro' => 'nullable|string',
        'cidade' => 'nullable|string',
        'estado' => 'nullable|string',
        'telefone' => 'nullable|string',
    ];
}

}
