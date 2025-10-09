<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaBerprestasiRequest extends FormRequest
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
            'foto'                  => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            'nama_lengkap'          => ['required', 'string', 'max:255'],
            'kelas'                 => ['required', 'string', 'max:100'],
            'jenis_prestasi'        => ['required', 'string', 'max:255'],
            'peringkat'             => ['required', 'string', 'max:100'],
            'tahun'                 => ['required', 'digits:4', 'integer', 'min:1900', 'max:' . (date('Y') + 1)] ,
            'tingkat'               => ['required', 'string', 'max:100'],
            'nama_penyelenggara'    => ['nullable', 'string', 'max:255'],
            'keterangan'            => ['nullable', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'foto.required'                 => 'Foto wajib diisi.',
            'foto.image'                    => 'File harus berupa gambar.',
            'foto.mimes'                    => 'Format foto harus berupa jpeg, png, jpg, gif, atau svg.',
            'foto.max'                      => 'Ukuran foto maksimal 2MB.',
            'nama_lengkap.required'         => 'Nama lengkap wajib diisi.',
            'nama_lengkap.string'           => 'Nama lengkap harus berupa string.',
            'nama_lengkap.max'              => 'Nama lengkap maksimal 255 karakter.',
            'kelas.required'                => 'Kelas wajib diisi.',
            'kelas.string'                  => 'Kelas harus berupa string.',
            'kelas.max'                     => 'Kelas maksimal 100 karakter.',
            'jenis_prestasi.required'       => 'Jenis prestasi wajib diisi.',
            'jenis_prestasi.string'         => 'Jenis prestasi harus berupa string.',
            'jenis_prestasi.max'            => 'Jenis prestasi maksimal 255 karakter.',
            'peringkat.required'            => 'Peringkat wajib diisi.',
            'peringkat.string'              => 'Peringkat harus berupa string.',
            'peringkat.max'                 => 'Peringkat maksimal 100 karakter.',
            'tahun.required'                => 'Tahun wajib diisi.',
            'tahun.digits'                  => 'Tahun harus terdiri dari 4 digit.',
            'tahun.integer'                 => 'Tahun harus berupa angka.',
            'tahun.min'                     => 'Tahun minimal adalah 1900.',
            'tahun.max'                     => 'Tahun maksimal adalah tahun ini atau tahun depan.',
            'tingkat.required'              => 'Tingkat wajib diisi.',
            'tingkat.string'                => 'Tingkat harus berupa string.',
            'tingkat.max'                   => 'Tingkat maksimal 100 karakter.',
            'nama_penyelenggara.required'   => 'Nama penyelenggara wajib diisi.',
            'nama_penyelenggara.string'     => 'Nama penyelenggara harus berupa string.',
            'nama_penyelenggara.max'        => 'Nama penyelenggara maksimal 255 karakter.',
            'keterangan.string'             => 'Keterangan harus berupa string.',
        ];
    }
}
