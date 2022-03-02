<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Nationalcode;

class RegisterRequest extends FormRequest
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
            'melli_code' => 'required|bail|digits:10',
            'phone' => 'required|bail|regex:/(09)[0-9]{9}/|digits:11',
            'birthday' => 'required|date|bail',
            'state' => 'required|bail|alpha',
            // 'city' => 'required|bail|alpha',
            'period' => 'required|bail'
        ];
    }
}
