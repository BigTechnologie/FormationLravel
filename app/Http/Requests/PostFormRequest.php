<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class PostFormRequest extends FormRequest
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

        $isRequired = request()->isMethod("POST") ?"required|": "";
        $imageRules = request()->isMethod("POST") ?
            "required|image|mimes:jpeg,png,jpg,webp,gif|max:2048":
            "nullable|image|mimes:jpeg,png,jpg,webp,gif|max:2048";
        $titleRules = request()->isMethod("POST") ?
            "required|unique:posts|min:4|max:60":
            "required|min:4|max:60";        
        return [
            //
            'title' => $titleRules,
			'slug' => '',
			'description' => 'required|min:10|max:255',
			'content' => 'required|max:3000',
			'imageUrl' => $imageRules,
            'category_id' => 'required|exists:categories,id',
			'isPublished' => $isRequired.'in:true,false|nullable'
        ];
    }
    public function prepareForValidation()
    {
        $this->merge([
            'slug' => Str::slug($this->input('title')),
			'isPublished' => $this->input('isPublished') ? 'true' : 'false',
			
        ]);
    }
}