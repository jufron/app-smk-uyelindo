<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengaturanAplikasiUmumRequest extends FormRequest
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
            'sambutan_kepala_sekolah'       => ['required', 'string', 'max:65535'],            
            'nama_kepala_sekolah'           => ['required', 'string', 'max:255'],
            'foto_kepala_sekolah'           => ['nullable', 'image', 'mimes:jpeg,JPEG,png,PNG,jpg,JPG', 'max:500'],
            'sejarah'                       => ['required', 'string', 'max:65535'],
            'visi_misi'                     => ['required', 'string', 'max:65535'],            
            'struktur_organisasi'           => ['nullable', 'image', 'mimes:jpeg,JPEG,png,PNG,jpg,JPG', 'max:500']  
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
            'sambutan_kepala_sekolah.required'  => 'Sambutan kepala sekolah wajib diisi',
            'sambutan_kepala_sekolah.string'    => 'Sambutan kepala sekolah harus berupa teks',
            'sambutan_kepala_sekolah.max'       => 'Sambutan kepala sekolah terlalu panjang',
            
            'nama_kepala_sekolah.required'      => 'Nama kepala sekolah wajib diisi',
            'nama_kepala_sekolah.string'        => 'Nama kepala sekolah harus berupa teks',
            'nama_kepala_sekolah.max'           => 'Nama kepala sekolah terlalu panjang',
            
            'foto_kepala_sekolah.image'         => 'File harus berupa gambar',
            'foto_kepala_sekolah.mimes'         => 'Format gambar harus jpeg/jpg/png',
            'foto_kepala_sekolah.max'           => 'Ukuran gambar maksimal 500KB',
            
            'sejarah.required'                  => 'Sejarah wajib diisi',
            'sejarah.string'                    => 'Sejarah harus berupa teks',
            'sejarah.max'                       => 'Sejarah terlalu panjang',
            
            'visi_misi.required'                => 'Visi misi wajib diisi',
            'visi_misi.string'                  => 'Visi misi harus berupa teks',
            'visi_misi.max'                     => 'Visi misi terlalu panjang',
            
            'struktur_organisasi.image'         => 'File harus berupa gambar',
            'struktur_organisasi.mimes'         => 'Format gambar harus jpeg/jpg/png',
            'struktur_organisasi.max'           => 'Ukuran gambar maksimal 500KB'
        ];
    }
}
