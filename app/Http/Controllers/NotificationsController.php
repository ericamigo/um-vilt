<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class NotificationsController extends Controller
{
    public function index()
    {
        return Inertia::render('Notifications');
    }

    public function show(DatabaseNotification $notification): RedirectResponse
    {
        if (! $notification->read_at) {
            $notification->markAsRead();
        }

        if (! Route::has($notification->data['route']['name'])) {
            return Redirect::route('dashboard');
        }

        return Redirect::route(
            $notification->data['route']['name'],
            $notification->data['route']['params']
        );
    }

    public function update(DatabaseNotification $notification): RedirectResponse
    {
        if ($notification->read_at) {
            $notification->markAsUnread();
        } else {
            $notification->markAsRead();
        }

        return Redirect::back();
    }
}
