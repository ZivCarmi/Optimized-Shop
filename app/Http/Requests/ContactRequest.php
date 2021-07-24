<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|min:2|max:70',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10|max:800'
        ];
    }
}
