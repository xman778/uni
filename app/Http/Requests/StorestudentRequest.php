<?php

namespace App\Http\Requests;

use App\Models\student;
use Illuminate\Foundation\Http\FormRequest;

class StorestudentRequest extends FormRequest
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
        // return [
        //     'name' => ['string', 'max:255'],
        //     'address' => ['string', 'max:255'],
        //     'age' => ['numeric', 'max:3'],
        //     'phone number' => ['numeric', 'max:11'],
        //     'home number' => ['numeric', 'max:11'],
        //     'name' => ['string', 'max:255'],
        //     'national_id' => ['email', 'max:14'],
        // ];
    }
}
