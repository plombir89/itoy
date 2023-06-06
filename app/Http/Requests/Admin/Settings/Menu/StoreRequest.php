<?php

namespace App\Http\Requests\Admin\Settings\Menu;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'menu.*.title' => ['required','string'],
            'menu.*.link' => ['required','string'],
            'published' => ['nullable','boolean']
        ];
    }

    public function attributes()
    {
        return [
            'menu.*.title' => 'title',
            'menu.*.link' => 'link',
        ];
    }
}
