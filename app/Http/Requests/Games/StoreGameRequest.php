<?php

namespace App\Http\Requests\Games;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
        return [
            'name' => ['required', 'string'],
            'description' => ['required', 'string'],
            'playTime' => ['required', 'integer'],
            'players' => ['required', 'integer'],

        ];
    }

    public function messages(): array{
        return [
            'name.required' => 'The name field is required.',
            'description.required' => 'The description field is required.',
            'playTime.required' => 'The play time field is required.',
            'players.required' => 'The players field is required.',
        ];
    }
}
