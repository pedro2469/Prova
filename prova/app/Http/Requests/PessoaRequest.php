<?php

namespace App\Http\Requests;


use App\Rules\validarCpf;
use App\Rules\formatoCpf;

use Illuminate\Foundation\Http\FormRequest;


class PessoaRequest extends FormRequest
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
            'nome'=>['required', "unique:pessoas,nome,".  $this->route('pessoa')],
            'cpf'=>['required','string',"unique:pessoas,cpf,".  $this->route('pessoa'),new validarCpf, new formatoCpf],
            'dataNascimento'=>'required|date_format:Y-m-d'
        ];

    }

    public function messages()
    {
        return[
            'nome.unique'=>'Nome duplicado. Insira um nome Unico.',
            'cpf.formatoCpf' => 'Formato Invalido. Inserir Cpf no seguinte formato.(XXX.XXX.XXX-XX)'
        ];
    }
}
