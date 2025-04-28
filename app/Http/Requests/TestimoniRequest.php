<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimoniRequest extends FormRequest
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
        $testimoni = $this->route('testimoni');

        return [
            'nama_lengkap'      => ['required', 'string', 'max:191', $testimoni ? "unique:testimoni,nama_lengkap,$testimoni->id" : 'unique:testimoni,nama_lengkap'],
            'avatar'            => ['nullable', 'image', 'mimes:jpeg,JPEG,png,PNG,jpg,JPG', 'max:500'],
            'tahun_lulus'       => ['required', 'numeric', 'digits:4'],
            'pekerjaan'         => ['required', 'string', 'max:191'],
            'content'           => ['required', 'string'],
            'status'            => ['nullable'],
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
            'nama_lengkap.required'     => 'Nama lengkap wajib diisi',
            'nama_lengkap.string'       => 'Nama lengkap harus berupa teks',
            'nama_lengkap.max'          => 'Nama lengkap maksimal 191 karakter',
            'nama_lengkap.unique'       => 'Nama lengkap sudah digunakan',
            'avatar.image'              => 'Foto harus berupa gambar',
            'avatar.mimes'              => 'Foto harus berformat jpeg, png, atau jpg',
            'avatar.max'                => 'Ukuran Foto maksimal 500KB',
            'tahun_lulus.required'      => 'Tahun lulus wajib diisi',
            'tahun_lulus.numeric'       => 'Tahun lulus harus berupa angka',
            'tahun_lulus.digits'        => 'Tahun lulus harus 4 digit',
            'pekerjaan.required'        => 'Pekerjaan wajib diisi',
            'pekerjaan.string'          => 'Pekerjaan harus berupa teks',
            'pekerjaan.max'             => 'Pekerjaan maksimal 191 karakter',
            'content.required'          => 'Konten testimoni wajib diisi',
            'content.string'            => 'Konten testimoni harus berupa teks',
            'status.required'           => 'Status wajib diisi',
            'status.boolean'            => 'Status harus berupa true/false',
        ];
    }
}
