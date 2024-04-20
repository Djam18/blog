<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostSectionRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Adjust authorization logic as needed
    }

    public function rules()
    {
        return [
            'post_id' => 'required|exists:posts,id',
            'content' => 'required',
        ];
    }
}
