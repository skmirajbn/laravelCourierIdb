<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller {
    /**
     * Update the user's avatar.
     */
    public function updateProfileAvatar(Request $request): RedirectResponse {
        dd('hello');
        $request->user()->fill($request->all());

        $request->user()->save();

        return Redirect::route('profile.edit');
    }

    public function avatar(ProfileUpdateRequest $request) {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit');
    }
}
