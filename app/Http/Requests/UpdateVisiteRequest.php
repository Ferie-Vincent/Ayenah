<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVisiteRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'region' => 'required|string|max:255',
            'dateVisited' => 'required|string|max:100',
            'description' => 'required|string|max:10000',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            'image2' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            'image3' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
            'image4' => 'nullable|image|mimes:jpeg,png,jpg|max:10240',
        ];
    }
}
