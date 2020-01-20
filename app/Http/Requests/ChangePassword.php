<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends FormRequest
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
            'old' => 'required|string|min:8|max:255',
            'new' => 'required|string|min:8|max:255',
            'confirm' => 'required_with:new|same:new|string|min:8|max:255',
        ];
    }

    public function withValidator($validator)
    {
        // checks user current password
        // before making changes
        $validator->after(function ($validator) {
            if ( !Hash::check($this->old, $this->user()->password) ) {
                $validator->errors()->add('old', 'Your current password is incorrect.');
            }
        });
        return;
    }

    /*public function message()
    {
      return [
        'new.required' => 'A color is required',
        'confirm.required' => 'An image is required'
      ];
    }*/
}
