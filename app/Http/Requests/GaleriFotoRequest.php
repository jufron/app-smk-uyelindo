<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GaleriFotoRequest extends FormRequest
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
            'foto'      => $this->isMethod('post')
                            ? 'required|image|mimes:jpeg,png,jpg,gif|max:5000'
                            : 'nullable|image|mimes:jpeg,png,jpg,gif|max:5000', // max 2MB
            'deskripsi'=> 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'foto.required'     => 'Foto wajib diunggah.',
            'foto.image'        => 'File harus berupa gambar.',
            'foto.mimes'        => 'Format gambar harus jpeg, png, jpg, gif, atau svg.',
            'foto.max'          => 'Ukuran gambar maksimal 2MB.',
            'deskripsi.string' => 'Deskripsi harus berupa teks.',
        ];
    }
}
