<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
        'valor' => 'required|numeric|min:0',
        'descricao' => 'nullable|string',
        'confeitaria_id' => 'required|exists:confeitarias,id',
    ];
}

}
