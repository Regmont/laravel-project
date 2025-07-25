<?php

namespace App\Http\Requests\Community;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Community;

class CommunityCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required','string','max:255', Rule::unique(Community::class)],
            'theme_id'=>['required','integer'],
            'is_public'=>['boolean'],
            'description' =>['string','max:255'],
        ];
    }
}
