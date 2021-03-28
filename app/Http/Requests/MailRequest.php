<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'name' => "required|string|max:30|min:3",
            'mail' => 'required|string|max:50|min:5',
            'message'=>"required|min:20"
        ];
    }

    public function messages()
    {
        return[
            "name.required"=> "Il nome è obbligatorio",
            "name.min"=> "Il nome deve essere di almeno 5 caratteri",
            "name.max"=> "Il nome deve essere lungo massimo 100 caratteri",
            "mail.required"=> "la mail è obbligatoria",
            "mail.min"=> "La mail deve essere di almeno 3 carattere",

            "message.required"=> "Il messaggio è obbligatorio",
            "message.min"=> "Il messaggio  deve essere minimo di 20 caratteri",
        
        ];


    }
}
