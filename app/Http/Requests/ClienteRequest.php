<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:3',
            'cpf' => 'required',
            'rg' => 'required',
            'birth_date' => 'required',
            'phone_number' => 'required',
            'state_birth' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Você não informou o nome',
            'cpf.required' => 'Você não informou o cpf',
            'rg.required' => 'Você não informou o rg',
            'birth_date.required' => 'Você não informou a data de nascimento',
            'phone_number.required' => 'Você não informou o número do seu telefone',
            'state_birth.required' => 'Você não informou o seu estado de nascimento'
        ];
    }
}
