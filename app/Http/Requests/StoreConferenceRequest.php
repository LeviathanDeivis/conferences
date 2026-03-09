<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreConferenceRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

     
      @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     
    public function rules(): array
{
    return [
        'title' => 'required',
        'description' => 'required',
        'speakers' => 'required',
        'date' => 'required',
        'time' => 'required',
        'address' => 'required',
    ];
}
}
