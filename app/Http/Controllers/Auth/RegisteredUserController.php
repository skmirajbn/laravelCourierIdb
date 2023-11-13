<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller {
    /**
     * Display the registration view.
     */
    public function create(Request $request): View {
        $validatedData = $request->validate([
            'phone' => 'required|numeric|digits:11|regex:/^[01]/',
        ], [
            'phone.required' => 'ফোন নাম্বার প্রবেশ করুন',
            'phone.numeric' => 'ভ্যালিড মোবাইল নাম্বার প্রবেশ করুন',
            'phone.digits' => 'মোবাইল নাম্বারটি ১১ সংখ্যার হতে হবে',
            'phone.regex' => 'মোবাইল নাম্বারটি ০ বা ১ দিয়ে শুরু হতে হবে',
        ]);

        $phone = $request->phone;
        return view('auth.register', compact('phone'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => 'required|numeric|digits:11|regex:/^[01]/',
        ]);
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'role_id' => 2,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
