<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreationRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => 'required|unique:users,username|max:255',
            'birthday' => 'required|date',
            'name' => 'required|string',
            'email' => 'required|unique:users,email|email',
            'password' => 'required|confirmed',
        ];
    }
}
