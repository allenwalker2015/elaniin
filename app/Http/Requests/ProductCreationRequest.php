<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductCreationRequest extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre' => 'required|string',
            'cantidad' => 'required|int',
            'precio' => 'required|numeric',
            'descripcion' => 'string',
            'imagen' => 'string',
        ];
    }
}
