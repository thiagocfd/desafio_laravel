<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
        $rules = [
            'name' => 'required|min:3',
            'cpf' => ['required', Rule::unique('clientes', 'cpf')->ignore($this->segment(2))],
            'rg' => 'required_if:state_birth,SP',
            'birth_date' => 'required',
            'birth_date' => 'required|date',
            'phone_number' => 'required',
            'state_birth' => 'required'
        ];

        if($this->get('state_birth') == 'BA') {
            $rules['birth_date'] = 'required|date|before_or_equal:'.now()->subYears(18)->format("Y-m-d");
        }

        return $rules;
    }
}
