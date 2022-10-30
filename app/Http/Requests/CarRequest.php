<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
        $rules = [
            'model' => 'required|string|max:100',
            'color' => 'required|string|max:100',
            'mileage' => 'required|integer',
            'year' => 'required',
            'image' => 'sometimes|image|mimes:jpg,jpeg,png,bmp,svg,gif|max:2048',
            'lat' => 'nullable',
            'lng' => 'nullable',
        ];

        if ($this->method() == 'PUT') {
            $rules = [
                'model' => 'required|string|max:100',
                'color' => 'required|string|max:100',
                'mileage' => 'required|integer',
                'year' => 'required',
                'image' => 'sometimes|image|mimes:jpg,jpeg,png,bmp,svg,gif|max:2048',
                'lat' => 'nullable',
                'lng' => 'nullable',
            ];
        }
        return $rules;
    }

}
