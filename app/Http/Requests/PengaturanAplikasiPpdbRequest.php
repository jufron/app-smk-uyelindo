<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengaturanAplikasiPpdbRequest extends FormRequest
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
            'popup_pendaftaran'                         => ['nullable', 'boolean'],
            'brosur_pendaftaran'                        => ['nullable', 'image', 'mimes:jpeg,JPEG,png,PNG,jpg,JPG', 'max:500'],
            'tanggal_pendaftaran_gelombang_1_awal'      => ['required', 'date'],
            'tanggal_pendaftaran_gelombang_1_akhir'     => ['required', 'date', 'after:tanggal_pendaftaran_gelombang_1_awal'],
            'tanggal_pendaftaran_gelombang_2_awal'      => ['required', 'date', 'after:tanggal_pendaftaran_gelombang_1_akhir'],
            'tanggal_pendaftaran_gelombang_2_akhir'     => ['required', 'date', 'after:tanggal_pendaftaran_gelombang_2_awal'],
            'tanggal_pendaftaran_gelombang_3_awal'      => ['required', 'date', 'after:tanggal_pendaftaran_gelombang_2_akhir'],
            'tanggal_pendaftaran_gelombang_3_akhir'     => ['required', 'date', 'after:tanggal_pendaftaran_gelombang_3_awal']
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
            'popup_pendaftaran.boolean'                         => 'Status popup pendaftaran harus berupa boolean',
            
            'brosur_pendaftaran.image'                          => 'File brosur pendaftaran harus berupa gambar',
            'brosur_pendaftaran.mimes'                          => 'Format file brosur pendaftaran harus jpeg/jpg/png',
            'brosur_pendaftaran.max'                            => 'Ukuran file brosur pendaftaran maksimal 500KB',

            'tanggal_pendaftaran_gelombang_1_awal.required'     => 'Tanggal awal pendaftaran gelombang 1 wajib diisi',
            'tanggal_pendaftaran_gelombang_1_awal.date'         => 'Format tanggal awal pendaftaran gelombang 1 tidak valid',
            
            'tanggal_pendaftaran_gelombang_1_akhir.required'    => 'Tanggal akhir pendaftaran gelombang 1 wajib diisi',
            'tanggal_pendaftaran_gelombang_1_akhir.date'        => 'Format tanggal akhir pendaftaran gelombang 1 tidak valid',
            'tanggal_pendaftaran_gelombang_1_akhir.after'       => 'Tanggal akhir harus setelah tanggal awal pendaftaran gelombang 1',

            'tanggal_pendaftaran_gelombang_2_awal.required'     => 'Tanggal awal pendaftaran gelombang 2 wajib diisi',
            'tanggal_pendaftaran_gelombang_2_awal.date'         => 'Format tanggal awal pendaftaran gelombang 2 tidak valid',
            'tanggal_pendaftaran_gelombang_2_awal.after'        => 'Tanggal awal gelombang 2 harus setelah tanggal akhir gelombang 1',

            'tanggal_pendaftaran_gelombang_2_akhir.required'    => 'Tanggal akhir pendaftaran gelombang 2 wajib diisi',
            'tanggal_pendaftaran_gelombang_2_akhir.date'        => 'Format tanggal akhir pendaftaran gelombang 2 tidak valid',
            'tanggal_pendaftaran_gelombang_2_akhir.after'       => 'Tanggal akhir harus setelah tanggal awal pendaftaran gelombang 2',

            'tanggal_pendaftaran_gelombang_3_awal.required'     => 'Tanggal awal pendaftaran gelombang 3 wajib diisi',
            'tanggal_pendaftaran_gelombang_3_awal.date'         => 'Format tanggal awal pendaftaran gelombang 3 tidak valid',
            'tanggal_pendaftaran_gelombang_3_awal.after'        => 'Tanggal awal gelombang 3 harus setelah tanggal akhir gelombang 2',

            'tanggal_pendaftaran_gelombang_3_akhir.required'    => 'Tanggal akhir pendaftaran gelombang 3 wajib diisi',
            'tanggal_pendaftaran_gelombang_3_akhir.date'        => 'Format tanggal akhir pendaftaran gelombang 3 tidak valid',
            'tanggal_pendaftaran_gelombang_3_akhir.after'       => 'Tanggal akhir harus setelah tanggal awal pendaftaran gelombang 3',
        ];
    }
}
