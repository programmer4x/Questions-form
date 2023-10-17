<?php

namespace App\Http\Requests\Form_Question;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFormQuestionRequest extends FormRequest
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
            'name' => 'min:5',
            'status' => 'required|boolean',
            'uniLink' ,
        ];
    }
}
