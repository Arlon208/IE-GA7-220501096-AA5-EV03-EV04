<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCustomerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $method = $this->method();
        if($method == 'PUT'){
         return [
            'nombre' => ['required'],
            'ciudad' => ['required'],
            'direccion' => ['required'],
            'telefono' => ['required'],
            ];
        }else{
             return [
            'nombre' => ['sometimes','required'],
            'ciudad' => ['sometimes','required'],
            'direccion' => ['sometimes','required'],
            'telefono' => ['sometimes','required'],
            ];
        }
    }
}
