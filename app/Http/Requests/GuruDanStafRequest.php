<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class GuruDanStafRequest extends FormRequest
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
        $id = $this->route('guruAndStaf')?->id ?? $this->id;

        return [
            'foto'                      => $this->isMethod('post')
                                            ? 'required|image|mimes:jpeg,png,jpg,gif|max:500'
                                            : 'nullable|image|mimes:jpeg,png,jpg,gif|max:500', // max 500kb
            'nama_lengkap'              => ['required', 'string', 'max:200'],
            'nip'                       => ['nullable', 'string', 'max:50'],
            'nuptx'                     => ['nullable', 'string', 'max:50'],
            'ptx'                       => ['nullable', 'string', 'max:100'],
            'status_kewarganegaraan'    => ['required', 'in:warga indoneisa,warga luar'],
            'sk_pengangkatan'           => ['nullable', 'string', 'max:200'],
            'lembaga_pengangkatan'      => ['nullable', 'string', 'max:200'],
            'agama'                     => ['required', 'in:Islam,katholik,protestan,hindu,budha,konghucu'],
            'alamat'                    => ['required', 'string', 'max:255'],
            'rt'                        => ['required', 'string', 'max:10'],
            'rw'                        => ['required', 'string', 'max:10'],
            'nama_dusun'                => ['nullable', 'string', 'max:100'],
            'desa_kelurahan'            => ['required', 'string', 'max:100'],
            'kecamatan'                 => ['required', 'string', 'max:100'],
            'kode_pos'                  => ['nullable', 'digits_between:4,6'],
            'telepon'                   => ['required', 'string', 'max:20'],
            'email'                     => ['required', 'email', 'max:150',
                                                Rule::unique('guru_and_staf', 'email')->ignore($id),
                                            ],
            'sumber_gaji'               => ['required', 'string', 'max:150'],
            'nama_ibu_kandung'          => ['required', 'string', 'max:150'],
            'status_perkawinan'         => ['required', 'in:belum menikah,sudah menikah,janda,duda'],
            'nik'                       => ['required', 'digits:16'],
        ];
    }
    
    public function messages(): array
    {
        return [
            'foto.image'                        => 'File foto harus berupa gambar.',
            'foto.mimes'                        => 'Format foto harus jpg, jpeg, png, atau webp.',
            'foto.max'                          => 'Ukuran foto maksimal 2MB.',
            'nama_lengkap.required'             => 'Nama lengkap wajib diisi.',
            'nama_lengkap.max'                  => 'Nama lengkap tidak boleh lebih dari 200 karakter.',
            'status_kewarganegaraan.required'   => 'Status kewarganegaraan wajib dipilih.',
            'status_kewarganegaraan.in'         => 'Nilai status kewarganegaraan tidak valid.',
            'agama.required'                    => 'Agama wajib dipilih.',
            'agama.in'                          => 'Nilai agama tidak valid.',
            'desa_kelurahan.required'           => 'Desa atau kelurahan wajib diisi.',
            'kecamatan.required'                => 'Kecamatan wajib diisi.',
            'telepon.required'                  => 'Nomor telepon wajib diisi.',
            'email.required'                    => 'Alamat email wajib diisi.',
            'email.email'                       => 'Format email tidak valid.',
            'email.unique'                      => 'Email sudah terdaftar.',
            'sumber_gaji.required'              => 'Sumber gaji wajib diisi.',
            'nama_ibu_kandung.required'         => 'Nama ibu kandung wajib diisi.',
            'status_perkawinan.required'        => 'Status perkawinan wajib dipilih.',
            'status_perkawinan.in'              => 'Nilai status perkawinan tidak valid.',
            'nik.required'                      => 'Nomor Induk Kependudukan (NIK) wajib diisi.',
            'nik.digits'                        => 'NIK harus terdiri dari 16 digit.',
            'kode_pos.digits_between'           => 'Kode pos harus terdiri dari 4 sampai 6 digit.',
        ];
    }
}
