<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
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
            'name' => 'required|unique:roles,name|max:191',
            'permission' => 'required|array|min:1',
        ];
        if ($this->method() === 'PUT') {
            $rules = array_merge($rules, [
                'name' => 'required|unique:roles,name,' . $this->route('role')->id,
            ]);
        }
        return $rules;
    }

}
