<?php

namespace App\Http\Requests\Diller;

use Illuminate\Foundation\Http\FormRequest;

class DillerAddUserRequest extends FormRequest
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
            'login' => ['required', 'unique:users,login'],
            'password' => ['required'],
            'server_n' => ['required'],
            'notice' => []
        ];
    }
}
