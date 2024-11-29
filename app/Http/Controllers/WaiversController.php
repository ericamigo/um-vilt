<?php

namespace App\Http\Controllers;

use App\Enums\Semester;
use App\Enums\Statuses\WaiverStatus;
use App\Http\Resources\Enums\SemesterResource;
use App\Http\Resources\WaiverResource;
use App\Models\Waiver;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class WaiversController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Waivers/Index', [
            'waivers' => WaiverResource::collection(
                Auth::user()->employee->waivers()
                    ->withCount([
                        'beneficiaries',
                    ])
                    ->latest()
                    ->paginate(20)
                    ->withQueryString()
            ),
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Waivers/Create', [
            'semesters' => SemesterResource::unwrapped(Semester::cases()),
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $waiver = $request->user()->employee->waivers()
            ->create($request->only(
                'year',
                'semester',
            ));

        return Redirect::route('waivers.show', $waiver);
    }

    public function show(Waiver $waiver)
    {
        return Inertia::render('Waivers/Show', [
            'waiver' => WaiverResource::make(
                $waiver->load([
                    'beneficiaries.student.user',
                ])
            ),
        ]);
    }

    public function destroy(Waiver $waiver): RedirectResponse
    {
        abort_unless(
            $waiver->status == WaiverStatus::New and
            $waiver->employee_id == Auth::user()->employee?->id, 403);

        $waiver->beneficiaries()->delete();
        $waiver->delete();

        return Redirect::route('waivers.index');
    }
}
