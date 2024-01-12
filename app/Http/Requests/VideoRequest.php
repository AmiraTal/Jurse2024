<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string',
            'order' => 'required|string',
            'type' => 'required|in:link,upload',
            'vpath' => 'required_if:type,link|url',
            'video_file' => 'required_if:type,upload|file|mimes:mp4,mov,avi',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
