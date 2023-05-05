<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserNeetInfo extends FormRequest
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
            'ssc_state' => 'required',
            'hsc_state' => 'required',
            'pincode' => 'required|numeric',
            'state' => 'required|string',
            'city' => 'required',
            'area' => 'required',
            'neet_category' => 'required',
            'state_category' => 'required',
            'gender' => 'required',
            'physical_handicap' => 'required',
            'armed_force' => 'required',
            'minority' => 'required',
            'eligible_quota' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'ssc_state.required' => 'The 10th passing state field is required.',
            'hsc_state.required' => 'The 12th passing state field is required.',
            'eligible_quota.required' => 'The eligible for any quota field is required.',
        ];
    }
}
