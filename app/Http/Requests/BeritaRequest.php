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
            'poster'        => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:500'],
            'judul'         => ['required', 'string', 'max:191', $berita ? "unique:beritas,judul,$berita->id" : 'unique:berita,judul'],
            'slug'          => ['required', 'string', $berita ? "unique:beritas,judul,$berita->id" : 'unique:berita,judul'],
            'content'       => ['required', 'string', 'max:65535'],
            'kategory_id'   => ['required', 'exists:kategory,id'],
            'status'        => ['nullable'],
        ];
    }
}
