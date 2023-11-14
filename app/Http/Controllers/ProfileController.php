<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller {
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }


    public function updateAvatar(Request $request): RedirectResponse {
        $validatedData = $request->validate([
            'avatar' => 'required|image|max:2048|mimes:jpeg,png,jpg',
        ], [
            'avatar.image' => 'The avatar must be an image file.',
            'avatar.max' => 'The avatar must not exceed 2048KB in size.',
            'avatar.mimes' => 'The avatar must be a JPEG or PNG image.',
        ]);

        $avatar = $request->file('avatar');
        $imagePath = $avatar->store('avatars', 'public');

        $request->user()->avatar = $imagePath;
        $request->user()->save();
        return Redirect::route('profile.edit');
    }
    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
