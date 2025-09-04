<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovimentacaoRequest extends FormRequest
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
            'tipo' => 'required|in:entrada,saida',
            'produto_id' => 'required|integer',
            'quantidade' => 'required|integer|min:1',
            'valor_unitario' => 'nullable|numeric',
            'observacao' => 'nullable|string',
        ];
    }
}
