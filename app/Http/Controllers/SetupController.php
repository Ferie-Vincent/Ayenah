<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class SetupController extends Controller
{
    private function adminExists(): bool
    {
        return User::where('is_admin', true)->exists();
    }

    public function create()
    {
        if ($this->adminExists()) {
            return redirect()->route('login');
        }

        return view('setup');
    }

    public function store(Request $request)
    {
        if ($this->adminExists()) {
            return redirect()->route('login');
        }

        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->is_admin = true;
        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
