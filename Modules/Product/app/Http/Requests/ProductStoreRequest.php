<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'status' => 'required|string|max:255',
            'name' => 'required|string|max:255|min:3',
            'valor' => 'required|string|max:255',
            'quantidade' => 'required|string|max:255',
            'desc' => 'nullable|string',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function messages()
    {
        return [
            'status.required' => 'O Campo situação é obrigatorio!',
            'valor.required' => 'Informe o valor do produto.',
            'name.required' => 'O Campo nome é obrigatorio!',
            'quantidade.required' => 'Informe a quantidade!',
        ];
    }
}
