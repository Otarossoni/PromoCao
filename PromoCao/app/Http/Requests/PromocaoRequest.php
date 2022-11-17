<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromocaoRequest extends FormRequest
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
            'promocao_titulo' => 'required',
            'promocao_descricao' => 'required',
            'promocao_preco' => 'required',
            'promocao_url' => 'required',
        ];
    }
}
