<?php

namespace App\Http\Requests;

use App\Models\Beneficiary;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class BeneficiaryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return Auth::check();
    }

    public function prepareForValidation(): void
    {
        $this->merge([
            'date_time' => Carbon::parse($this->date_time)->timezone('UTC'),
        ]);
    }

    public function rules(): array
    {
        return [
            'student_id' => $this->route('beneficiary')
                ? []
                : [
                    'required',
                    Rule::exists(Student::class, 'id'),
                    Rule::unique(Beneficiary::class)
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
