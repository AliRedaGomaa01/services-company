<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JointVentureRequest extends FormRequest
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
            'title_ar' => ['required' , 'string' , 'max:255'],
            'title_en' => ['required' , 'string' , 'max:255'],
            'description_ar' => ['required' , 'string' , 'max:1024'],
            'description_en' => ['required' , 'string' , 'max:1024'],
        ];
    }
}
