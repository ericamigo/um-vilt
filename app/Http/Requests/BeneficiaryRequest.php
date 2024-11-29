<?php

namespace App\Http\Requests;

use App\Models\Beneficiary;
use App\Models\Student;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class BeneficiaryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check();
    }

    public function rules(): array
    {
        return [
            'student_id' => [
                'required',
                Rule::exists(Student::class, 'id'),
                $this->route('beneficiary')
                    ? Rule::unique(Beneficiary::class)
                        ->where(function ($query) {
                            $query->where('waiver_id', $this->route('waiver')->id);
                        })
                        ->ignore($this->route('beneficiary')->id)
                    : Rule::unique(Beneficiary::class)
                        ->where(function ($query) {
                            $query->where('waiver_id', $this->route('waiver')->id);
                        }),
            ],
            'relationship' => [
                'required',
                'string',
                'max:200',
            ],
        ];
    }
}
