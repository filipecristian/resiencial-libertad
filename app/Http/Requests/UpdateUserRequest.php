<?php

namespace App\Http\Requests;

use App\Enums\RoleUserEnum;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'role' => [
                'required',
                Rule::in([RoleUserEnum::SYNDIC, RoleUserEnum::COUNSELOR, RoleUserEnum::RESIDENT]),
            ],
        ];
    }
}
