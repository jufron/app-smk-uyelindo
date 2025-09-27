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
            'judul'     => 'required|string|max:255',
            'foto'      => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'keterangan'=> 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required'    => 'Judul wajib diisi.',
            'judul.string'      => 'Judul harus berupa teks.',
            'judul.max'         => 'Judul maksimal 255 karakter.',
            'foto.required'     => 'Foto wajib diunggah.',
            'foto.image'        => 'File harus berupa gambar.',
            'foto.mimes'        => 'Format gambar harus jpeg, png, jpg, gif, atau svg.',
            'foto.max'          => 'Ukuran gambar maksimal 2MB.',
            'keterangan.string' => 'Keterangan harus berupa teks.',
        ];
    }
}
