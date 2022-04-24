<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'email' => [],
            'dealer' => [],
            'password' => ['required'],
            'notice' => [],
            'skype' => [],
            // 'jabber' => [],
            'icq' => [],
            // 'aim' => [],
            // 'msn' => [],
            'balance' => [],
            'disabled' => [],
            'confirmed' => [],
            'discount' => []
            // 'label_trusted' => []
        ];
    }
}
