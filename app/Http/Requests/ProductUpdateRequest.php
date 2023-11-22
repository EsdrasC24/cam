<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductUpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'category' => ['bail', 'required', 'exists:categories,id'],
            'name' => ['bail', 'required', 'string', 'max:70'],
            'code' => ['bail', 'required', Rule::unique('products', 'code')->ignore($this->args('id')), 'string', 'max:70'],
            'price' => ['bail', 'required'],
            'stock' => ['bail', 'required']
        ];
    }
}
