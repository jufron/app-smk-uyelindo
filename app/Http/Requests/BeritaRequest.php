<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeritaRequest extends FormRequest
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
        $berita = $this->route('berita');

        return [
            'poster'        => ['nullable', 'image', 'mimes:jpeg,JPEG,png,PNG,jpg,JPG', 'max:500'],
            'judul'         => ['required', 'string', 'min:20', 'max:191', $berita ? "unique:berita,judul,$berita->id" : 'unique:berita,judul'],
            'content'       => ['required', 'string', 'max:65535'],
            'kategory_id'   => ['required', 'exists:kategory,id'],
            'status'        => ['nullable'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'poster.image' => 'File harus berupa gambar',
            'poster.mimes' => 'Format gambar harus jpeg, png, atau jpg',
            'poster.max' => 'Ukuran gambar maksimal 500KB',
            'judul.required' => 'Judul berita wajib diisi',
            'judul.string' => 'Judul harus berupa teks',
            'judul.min' => 'Judul minimal 20 karakter',
            'judul.max' => 'Judul maksimal 191 karakter',
            'judul.unique' => 'Judul berita sudah digunakan',
            'content.required' => 'Konten berita wajib diisi',
            'content.string' => 'Konten harus berupa teks',
            'content.max' => 'Konten terlalu panjang',
            'kategory_id.required' => 'Kategori wajib dipilih',
            'kategory_id.exists' => 'Kategori tidak valid',
        ];
    }
}
