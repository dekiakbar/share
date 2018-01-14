<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmailReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama'  => 'required|max:100',
            'email' => 'required|email|max:100',
            'pesan' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Form nama harus diisi',
            'nama.max' => 'Form nama maksimal berisi 100 karakter',
            'email.required' => 'Form email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.max' => 'Form email maksimal berisi 100 karakter',
            'pesan.required' => 'Form pesan harus diisi',
        ];
    }
}
