<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        
        return [
            "title" => "required|min:5|max:255",
            "slug" => "required|min:5|max:255|unique:posts,slug,".$this->route("post")->id,
            "content" => "required|min:5",
            "category_id" => "required|integer",
            "description" => "required|min:5",
            "posted" => "required",
        ];
    }
}
