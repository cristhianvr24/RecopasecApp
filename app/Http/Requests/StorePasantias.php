<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePasantias extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cedula' => 'required|max:09',
            'nombre_1' => 'required|max:15',
            'nombre_2' => 'required|max:15',
            'apellido_1' => 'required|max:15',
            'apellido_2' => 'required|max:15',
            'telefono' => 'required|max:12',
            'email' => 'required|max:100',
        ];
    }
    public function attributes()
    {
        return[
            'cedula' => 'cédula del estudiante',
            'nombre_1' => 'primer nombre del estudiante',
            'nombre_2' => 'segundo nombre del estudiante',
            'apellido_1' => 'primer apellido del estudiante',
            'apellido_2' => 'segundo apellido del estudiante',
        ];
    }
}
