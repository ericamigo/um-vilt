<?php

namespace App\Http\Controllers;

use App\Http\Requests\BeneficiaryRequest;
use App\Models\Beneficiary;
use App\Models\Waiver;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class WaiverBeneficiariesController extends Controller
{
    public function store(BeneficiaryRequest $request, Waiver $waiver): RedirectResponse
    {
        $beneficary = $waiver->beneficiaries()
            ->create($request->only(
                'student_id',
                'relationship',
            ));

        return Redirect::back()
            ->with('success', sprintf(
                'Successfully added %s as beneficiary.',
                $beneficary->student->user->name
            ));
    }

    public function update(BeneficiaryRequest $request, Waiver $waiver, Beneficiary $beneficiary): RedirectResponse
    {
        abort_unless($waiver->id === $beneficiary->waiver_id, 404);

        $beneficiary->update($request->only(
            'student_id',
            'relationship',
        ));

        return Redirect::back();
    }

    public function destroy(Waiver $waiver, Beneficiary $beneficiary): RedirectResponse
    {
        abort_unless($waiver->id === $beneficiary->waiver_id, 404);

        $beneficiary->deleteAllAttachments();
        $beneficiary->delete();

        return Redirect::back()
            ->with('error', 'Beneficiary has been deleted.');
    }
}
