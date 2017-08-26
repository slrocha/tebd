<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteStoreRequest extends FormRequest
{
   
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
        'cliente.*' => 'required',
        'endereco.*' => 'required'
        ];
    }

    public function messages(){

        $messages = ['required' => 'O campo :attribute é obrigatório.']
    }
}
