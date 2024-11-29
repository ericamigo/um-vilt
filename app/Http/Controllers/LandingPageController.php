<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LandingPageController extends Controller
{
    public function __invoke(): RedirectResponse
    {
        return Redirect::route(
            Auth::check() ? 'dashboard' : 'login'
        );
    }
}
