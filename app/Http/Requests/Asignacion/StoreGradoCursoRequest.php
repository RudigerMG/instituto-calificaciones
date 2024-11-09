<?php

namespace App\Http\Requests\Asignacion;

use Illuminate\Foundation\Http\FormRequest;

class StoreGradoCursoRequest extends FormRequest
{
    // Autorizar la petición
    public function authorize(): bool
    {
        return true;
    }

    // Reglas de validación
    public function rules(): array
    {
        return [
            'grado_id' => 'required|exists:grados,id',
            'curso_id' => 'required|exists:cursos,id',
            'user_id' => 'required|exists:users,id',
        ];
    }
}
