<?php

declare(strict_types=1);

namespace HgaCreative\StorageManager\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UploadFile extends FormRequest
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
            'file' => 'required|file|max:8192',
            'tag' => 'nullable|min:3|max:50',
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'file.required' => 'A file is required',
            'file.file' => 'The uploaded item is not a file',
            'file.max' => 'Your file cannot exceed 8MB'
        ];
    }
}
