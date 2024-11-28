<?php

namespace App\Http\Controllers;

use App\Http\Resources\BranchResource;
use App\Models\Branch;

class LandingPageController extends Controller
{
    public function __invoke()
    {
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
