<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PhotoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'path' => ['required'],
            'title' => ['required'],
            'order' => ['required', 'integer'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
