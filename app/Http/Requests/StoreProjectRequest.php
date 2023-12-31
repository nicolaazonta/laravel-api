<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'description' => ['required'],
            'source_code' => ['nullable'],
            'link_site' => ['nullable'],
            'cover_image' => ['nullable'],
            'type_id' => ['exists:types,id'],
            'technologies' => ['exists:technologies,id']
        ];
    }
}
