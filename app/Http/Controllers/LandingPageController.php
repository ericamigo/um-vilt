<?php

namespace App\Http\Controllers;

use App\Http\Resources\BranchResource;
use App\Models\Branch;
use App\Models\User;

class LandingPageController extends Controller
{
    public function __invoke()
    {
        dd(
            User::first()->role,
            User::first()->is_active,
        );
        $branches = Branch::query()
            ->withCount([
                'campuses',
            ])
            ->with([
                'campuses' => function ($campuses) {
                    $campuses
                        ->with([
                            'branch',
                            'colleges' => function ($colleges) {
                                $colleges->orderBy('name');
                            },
                        ])
                        ->orderBy('name');
                },
            ])
            ->orderBy('name')
            ->get();

        // return $branches;

        return BranchResource::collection($branches);
    }
}
