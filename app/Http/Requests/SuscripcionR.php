<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuscripcionR extends FormRequest
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
            'estado'=>'boolean',
            'fecha_ini'=>'date',
            'fecha_fin'=>'date',
            'plan_id'=>'required|integer',
            'user_id'=>'integer|unique::users'
        ];
    }
}
