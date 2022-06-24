<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PlanR extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombre'=>'required|min:2|string',
            'precio'=>'required|integer',
            'descuento'=>'required|integer',
            'duracion'=>'required|string',
            'descripcion'=>'required|string',
            'cantidad_personas'=>'required|integer'
        ];
    }
}
