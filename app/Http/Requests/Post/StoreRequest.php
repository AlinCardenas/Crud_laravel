<?php

namespace App\Http\Requests\Post;

use App\Models\Category;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;
class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(){
        $this->merge([
            // 'slug' => Str::slug($this->title)
            'slug' => str($this->title)->slug()
        ]);
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
            "slug" => "required|min:5|max:255|unique:posts",
            "content" => "required|min:5",
            "category_id" => "required|integer",
            "description" => "required|min:5",
            "posted" => "required",
            "image" => "required|mimes:jpeg,jpg,png|max:10240"
        ];

    }
}
