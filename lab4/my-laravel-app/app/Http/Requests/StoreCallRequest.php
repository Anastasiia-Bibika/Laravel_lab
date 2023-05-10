<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCallRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'number_call' => 'required|string|max:255',
            'duration' => 'required|string|max:50',
            'pay' => 'required|string|max:255',
            'implementation_time' => 'required|string|max:45',
            'abonent_id' => 'required',
        ];
    }
}
