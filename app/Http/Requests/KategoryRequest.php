<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KategoryRequest extends FormRequest
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
        $kategory = $this->route('kategory');
        return [
            'nama'          => ['required', 'string', 'min:3', 'max:50', $kategory ? "unique:kategory,nama,$kategory->id" : 'unique:kategory,nama'],
            'deskripsi'     => ['nullable', 'string', 'min:10', 'max:65535']
        ];
    }
}
