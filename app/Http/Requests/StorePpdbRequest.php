<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePpdbRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'dob' => 'required|date|before:today',
            'address' => 'required|string',
            'previous_school' => 'required|string|max:255',
            'parent_contact' => 'required|string|max:20',
        ];
    }

    /**
     * Get custom error messages for validator errors.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Nama lengkap wajib diisi.',
            'dob.required' => 'Tanggal lahir wajib diisi.',
            'dob.before' => 'Tanggal lahir harus sebelum hari ini.',
            'address.required' => 'Alamat lengkap wajib diisi.',
            'previous_school.required' => 'Asal sekolah wajib diisi.',
            'parent_contact.required' => 'Kontak orang tua wajib diisi.',
        ];
    }
}