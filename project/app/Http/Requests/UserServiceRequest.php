<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserServiceRequest extends FormRequest
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
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'patronymic' => 'required|max:50',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'patronymic' => 'Отчество',
        ];
    }
}
