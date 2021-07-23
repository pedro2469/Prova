<?php

namespace App\Http\Requests;

use App\Rules\formatoPreco;
use Illuminate\Foundation\Http\FormRequest;

class ProdutoRequest extends FormRequest
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
            'codigo'=>['required', "unique:produtos,codigo,". $this->route('produto')],
            'nome'=>['required',"unique:produtos,nome". $this->route('produto')],
            'preco'=>['required','numeric', new formatoPreco()]
        ];
    }
}
