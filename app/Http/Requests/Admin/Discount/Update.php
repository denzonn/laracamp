<?php

namespace App\Http\Requests\Admin\Discount;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class Update extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::check() && Auth::user()->is_admin;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            // untuk code sendiri penjelasan detail di tabel discount, field code, dan exception idnya
            'code' => 'required|string|max:8|unique:discounts,code,'.$this->id.',id',
            'description' => 'nullable|string',
            'percentage' => 'required|numeric|min:1|max:100',
        ];
    }
}
