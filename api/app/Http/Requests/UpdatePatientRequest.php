<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatientRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'status' => 'required|exists:statuses,id',
            'firstname' => 'required_unless:status,1,null|nullable|string',
            'lastname' => 'required_unless:status,1,null|nullable|string',
            'birthday' => 'required_unless:status,1,null|nullable|date',
            'gender' => 'required|in:male,female',
            'mobiles' => 'required|array|min:1',
            'mobiles.*' => 'required|numeric|digits:11|starts_with:09|unique:patient_mobiles,number,' . $this->patient->id . ',patient',
            'telephone' => 'required_unless:status,1,null|nullable|numeric|digits:11|starts_with:0|unique:patients,telephone,' . $this->patient->id,
            'province' => 'required_unless:status,1,2,null|exists:provinces,id',
            'insurance' => 'required_unless:status,1,2,null|boolean',
            'lead_source' => 'required|exists:lead_sources,id',
            'treatments' => 'required_unless:status,1,null|array',
            'treatments.*' => 'required|exists:treatments,id',
            'desc' => 'nullable|string',
        ];
    }
}
