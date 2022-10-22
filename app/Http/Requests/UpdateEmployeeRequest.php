<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'unique:employees,phone,'.$this->employee->id],
            'email' => ['required', 'string', 'email', 'unique:employees,email,'.$this->employee->id],
            'id_number' => ['required', 'string', 'unique:employees,id_number,'.$this->employee->id],
        ];
    }
}
