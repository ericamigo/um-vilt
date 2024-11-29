<?php

namespace App\Http\Controllers;

use App\Http\Resources\BranchResource;
use App\Models\Branch;
use Illuminate\Support\Facades\Auth;

class LandingPageController extends Controller
{
    public function __invoke()
    {
        $student = Auth::user()->student
            ->load([
                'user',
                'course.college.campus.branch',
            ]);

        dd(
            $student->toArray(),
            Auth::user()?->employee?->toArray(),
            Auth::user()?->student?->toArray(),
        );
    }
}
