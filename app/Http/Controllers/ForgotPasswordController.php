<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ForgotPasswordController extends Controller
{
    // Show the form for requesting a password reset link
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    // Send a password reset link to the user's email
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $response = Password::sendResetLink($request->only('email'));

        return $response == Password::RESET_LINK_SENT
                    ? back()->with('status', __($response))
                    : back()->withErrors(['email' => __($response)]);
    }

    // Show the form for resetting the password
    public function showResetForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    // Handle the password reset
    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        $response = Password::reset($request->only('email', 'password', 'password_confirmation', 'token'), function ($user, $password) {
            $user->password = Hash::make($password);
            $user->save();
        });

        return $response == Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($response))
                    : back()->withErrors(['email' => __($response)]);
    }
}
