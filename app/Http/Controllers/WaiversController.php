<?php

namespace App\Http\Controllers;

use App\Enums\Semester;
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
            'waivers' => Auth::user()->employee->waivers,
        ]);
    }

    public function create(): Response
    {
        return Inertia::render('Waivers/Create', [
            'semesters' => SemesterResource::unwrapped(Semester::cases()),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->user()->employee->waivers()
            ->create($request->only(
                'year',
                'semester',
            ));

        return Redirect::route('waivers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Waiver $waiver)
    {
        return Inertia::render('Waivers/Show', [
            'waiver' => WaiverResource::make($waiver),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
