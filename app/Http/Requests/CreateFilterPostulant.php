<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateFilterPostulant extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'code' => [ 'required', 'min:4', 'max:200', 'unique:pgsql-ignung.institutions,code' ],
            'name' => [ 'required', 'min:4', 'max:200', 'unique:pgsql-ignung.institutions,code' ]
        ];
    }
}
