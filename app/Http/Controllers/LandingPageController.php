<?php

namespace App\Http\Controllers;

use App\Http\Resources\BranchResource;
use App\Models\Branch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LandingPageController extends Controller
{
    public function __invoke()
    {
        if (Auth::guest()) {
            return Redirect::route('login');
        }

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
