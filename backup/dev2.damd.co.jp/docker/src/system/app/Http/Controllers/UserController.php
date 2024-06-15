<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProfile;
use App\Models\UserCar;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showRegister()
    {
        return view('user.register');
    }

    public function register(Request $request)
    {
        $user = User::query()->create([
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        UserProfile::query()->create([
            'user_id' => $user->id
        ]);

        UserCar::query()->create([
            'user_id' => $user->id
        ]);

        Auth::login($user);

        return redirect()->route('profile');
    }

    public function showLogin()
    {
        if(Auth::user()){
            return redirect()->route('profile');
        }

        return view('user.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('profile');
        }

        return back();
    }

    public function profile()
    {
        $user = Auth::user();
        $profile = $user->profile;
        $car = $user->car;

        return view('user.profile', compact('user', 'profile', 'car'));
    }

    public function edit()
    {
        $user = Auth::user();
        $profile = $user->profile;
        $car = $user->car;

        return view('user.edit', compact('user', 'profile', 'car'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();
        $user->profile->fill($request->all());
        $user->profile->save();

        return redirect()->route('profile');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
