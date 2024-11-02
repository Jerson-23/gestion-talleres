<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SesioneRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'tema' => 'required|string',
			'ubicacion' => 'string',
			'instructor' => 'string',
			'sesionescol' => 'string',
			'nivel_dificultades_id' => 'required',
			'talleres_id' => 'required',
        ];
    }
}
