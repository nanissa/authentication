<?php

namespace Nanissa\UserManagement\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MassDestroyUserAddressRequest extends FormRequest
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
            'ids'   => 'required|array',
            'ids.*' => 'exists:user_addresses,id',
        ];
    }
}
