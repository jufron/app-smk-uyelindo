<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PendaftaranSiswaBaruRequest extends FormRequest
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
        $id = $this->route('daftarSiswaBaru')?->id ?? $this->id;

        return [
            // 🧍 Data Siswa
            'nama_lengkap'                  => ['required', 'string', 'max:100'],
            'nama_panggilan'                => ['required', 'string', 'max:50'],
            'email'                         => ['required', 'email',
                                                    Rule::unique('daftar_siswa_baru', 'email')->ignore($id),
                                                ],
            'nisn'                          => ['required', 'string', 'max:20'],
            'tanggal_lahir'                 => ['required', 'date'],
            'tempat_lahir'                  => ['required', 'string', 'max:100'],
            'jenis_kelamin'                 => ['required', 'in:Laki-laki,perempuan'],
            'agama'                         => ['required', 'string', 'max:50'],
            'alamat_siswa'                  => ['required', 'string', 'max:100'],
            'alamat_sekolah_sebelumnya'     => ['required', 'string', 'max:100'],
            'anak_ke'                       => ['required', 'numeric', 'min:1'],
            'status_anak'                   => ['required', 'string', 'max:50'],
            'nomor_telepon_siswa'           => ['required', 'string', 'max:20'],
            'jumlah_saudara_kandung'        => ['required', 'min:0'],
            'tinggal_dengan'                => ['required', 'in:orang tua,wali murid'],
            // 👨‍👩‍👧 Data Orang Tua
            'nama_lengkap_ayah'             => ['nullable', 'string', 'max:100'],
            'pekerjaan_ayah'                => ['nullable', 'string', 'max:100'],
            'pendidikan_ayah'               => ['nullable', 'string', 'max:100'],
            'nama_lengkap_ibu'              => ['nullable', 'string', 'max:100'],
            'pekerjaan_ibu'                 => ['nullable', 'string', 'max:100'],
            'pendidikan_ibu'                => ['nullable', 'string', 'max:100'],
            'nomor_telepon_orang_tua'       => ['nullable', 'string', 'max:20'],
            'alamat_orang_tua'              => ['nullable', 'string', 'max:100'],

            // 🧑‍🏫 Data Wali Murid
            'nama_lengkap_wali_murid'       => ['nullable', 'string', 'max:100'],
            'pekerjaan_wali_murid'          => ['nullable', 'string', 'max:100'],
            'hubungan_dengan_siswa'         => ['nullable', 'string', 'max:50'],
            'alamat_wali_siswa'             => ['nullable', 'string', 'max:100'],
            'nomor_hp_wali'                 => ['nullable', 'string', 'max:20'],
        ];
    }

    public function messages(): array
    {
        return [
            // 🧍 Data Siswa
            'nama_lengkap.required'         => 'Nama lengkap wajib diisi.',
            'nama_panggilan.required'       => 'Nama panggilan wajib diisi.',
            'email.required'                => 'Alamat email wajib diisi.',
            'email.email'                   => 'Format email tidak valid.',
            'email.unique'                  => 'Email sudah terdaftar.',
            'nisn.required'                 => 'NISN wajib diisi.',
            'tanggal_lahir.required'        => 'Tanggal lahir wajib diisi.',
            'tanggal_lahir.date'            => 'Format tanggal lahir tidak valid.',
            'tempat_lahir.required'         => 'Tempat lahir wajib diisi.',
            'jenis_kelamin.required'        => 'Jenis kelamin wajib dipilih.',
            'jenis_kelamin.in'              => 'Jenis kelamin tidak valid.',
            'agama.required'                => 'Agama wajib diisi.',
            'alamat_siswa.required'         => 'Alamat siswa wajib diisi.',
            'alamat_sekolah_sebelumnya.required' => 'Alamat sekolah sebelumnya wajib diisi.',
            'anak_ke.required'              => 'Kolom anak ke-berapa wajib diisi.',
            'anak_ke.numeric'               => 'Kolom anak ke-berapa harus berupa angka.',
            'status_anak.required'          => 'Status anak wajib diisi.',
            'nomor_telepon_siswa.required'  => 'Nomor telepon siswa wajib diisi.',

            'jumlah_saudara_kandung.required' => 'Jumlah saudara kandung wajib diisi.',

            'tinggal_dengan.required'           => 'Tinggal dengan wajib dipilih.',
            'tinggal_dengan.in'                 => 'Pilihan tinggal dengan tidak valid.',

            // 👨‍👩‍👧 Data Orang Tua
            'nama_lengkap_ayah.string'          => 'Nama ayah harus berupa teks.',
            'nama_lengkap_ibu.string'           => 'Nama ibu harus berupa teks.',
            'nomor_telepon_orang_tua.string'    => 'Nomor telepon orang tua tidak valid.',

            // 🧑‍🏫 Data Wali Murid
            'nama_lengkap_wali_murid.string'    => 'Nama wali murid harus berupa teks.',
            'hubungan_dengan_siswa.string'      => 'Hubungan dengan siswa harus berupa teks.',
        ];
    }
}
