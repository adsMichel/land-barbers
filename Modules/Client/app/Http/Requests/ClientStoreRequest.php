<?php

namespace Modules\Client\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ClientStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'tipo' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'name' => 'required|string|max:255|min:3',
            'email' => [
                'nullable',
                'email',
                Rule::unique('clients', 'email')->ignore($this->id, 'id'),
            ],
            'cpf' => [
                'nullable',
                'string',
                'min:14',
                'max:14',
                Rule::unique('clients', 'cpf')->ignore($this->id, 'id'),
            ],
            'rg' => 'nullable|string|max:50',
            'nascimento' => 'nullable|date|max:50',
            'cnpj' => 'nullable|string|max:255',
            'razaoSocial' => 'nullable|string|max:255',
            'iEstadual' => 'nullable|string|max:255',
            'isentoEstadual' => 'nullable',
            'tipoContribuinte' => 'nullable|string|max:255',
            'iMunicipal' => 'nullable|string|max:255',
            'iSuframa' => 'nullable|string|max:255',
            'empresaResponsavel' => 'nullable|string|max:255',
            'celular' => 'required|string|max:50',
            'whatsapp' => 'nullable',
            'phone' => 'nullable|string|max:255',
            'site' => 'nullable|string',
            'tecnico' => 'required|string|max:255',
            'tipoEndereco' => 'nullable|string',
            'cep' => 'nullable|string',
            'logradouro' => 'nullable|string',
            'numero' => 'nullable|string',
            'complemento' => 'nullable|string',
            'bairro' => 'nullable|string',
            'cidade' => 'nullable|string',
            'uf' => 'nullable|string',
            'observacao' => 'nullable|string',
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
            'tipo.required' => 'O Campo tipo é obrigatorio!',
            'status.required' => 'O Campo situação é obrigatorio!',
            'name.required' => 'O Campo nome é obrigatorio!',
            'email.required' => 'O Campo email é obrigatorio!',
            'email.unique' => 'Esse email já foi registrado!',
            'email.email' => 'O campo email deve ser um email valido!',
            'cpf.required' => 'O Campo cpf é obrigatorio!',
            'cpf.unique' => 'Esse cpf já foi registrado!',
            'cpf.min' => 'O campo cpf deve ter pelo menos 14 digitos!',
            'cpf.max' => 'O campo cpf deve ter no maximo 14 digitos!',
            'celular.required' => 'O Campo celular é obrigatorio!',
            'phone.required' => 'O Campo telefone é obrigatorio!',
            'tecnico.required' => 'O Campo técnico deve ser preenchido.',
        ];
    }
}
