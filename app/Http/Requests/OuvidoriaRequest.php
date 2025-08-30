<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OuvidoriaRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|min:4',
            'email' => 'required|email',
            'mensagem' => 'required|min:10',
        ];
    }
}
