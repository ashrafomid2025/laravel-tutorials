<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentsAddRequest extends FormRequest
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
        return [
              "name"=> "required|string",
        "lastname"=> "required|string",
        "score"=> "required|numeric|min:0|max:100",
        "age"=> "required|numeric|min:6|max:150",
            //
        ];
    }
    public function messages(){
        return [
               "name.required"=> "Name is required",
        "lastname.required"=> "Last Name is required",
        "score.required"=> "Score is required",
        "age.required"=> "Age is required",
        "score.numeric"=> "Score must be numeric",
        "age.numeric"=> "Age must be numeric",
        "score.min"=> "Score must be at least 0",
        "score.max"=> "Score must not exceed 100",
        "age.min"=> "Age must be at least 6",
        "age.max"=> "Age must not exceed 150",
        ];
    }
}
