<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengaturanAplikasiKontakRequest extends FormRequest
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
            'email'                 => ['required', 'email', 'min:10', 'max:255'],
            'telepon'               => ['required', 'string', 'min:11', 'max:14'],
            'telepon_whatsapp'      => ['required', 'string', 'min:11', 'max:14'],
            'facebook'              => ['required', 'string', 'min:30', 'max:255'],
            'instagram'             => ['required', 'string', 'min:30', 'max:255'],
            'youtube'               => ['required', 'string', 'min:30', 'max:255'],
            'tik_tok'               => ['required', 'string', 'min:30', 'max:255']
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
            'email.required'            => 'Email wajib diisi',
            'email.email'               => 'Format email tidak valid',
            'email.min'                 => 'Email minimal 10 karakter',
            'email.max'                 => 'Email maksimal 255 karakter',
            'telepon.required'          => 'Nomor telepon wajib diisi',
            'telepon.min'               => 'Nomor telepon minimal 11 digit',
            'telepon.max'               => 'Nomor telepon maksimal 14 digit',
            'telepon_whatsapp.required' => 'Nomor WhatsApp wajib diisi',
            'telepon_whatsapp.min'      => 'Nomor WhatsApp minimal 11 digit',
            'telepon_whatsapp.max'      => 'Nomor WhatsApp maksimal 14 digit',
            'facebook.required'         => 'Link Facebook wajib diisi',
            'facebook.min'              => 'Link Facebook minimal 30 karakter',
            'facebook.max'              => 'Link Facebook maksimal 255 karakter',
            'instagram.required'        => 'Link Instagram wajib diisi',
            'instagram.min'             => 'Link Instagram minimal 30 karakter',
            'instagram.max'             => 'Link Instagram maksimal 255 karakter',
            'youtube.required'          => 'Link Youtube wajib diisi',
            'youtube.min'               => 'Link Youtube minimal 30 karakter',
            'youtube.max'               => 'Link Youtube maksimal 255 karakter',
            'tik_tok.required'          => 'Link TikTok wajib diisi',
            'tik_tok.min'               => 'Link TikTok minimal 30 karakter',
            'tik_tok.max'               => 'Link TikTok maksimal 255 karakter'
        ];
    }
}
