<?php

namespace App\Http\Controllers\Requests\Api\Seccion;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class UpdateSeccionRequest.
 */
class UpdateSeccionRequest extends FormRequest
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
            'nombre' => ['required', 'string'],
        ];
    }
}
