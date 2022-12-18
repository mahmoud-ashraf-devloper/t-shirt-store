<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminAuthController extends Controller
{
    public function getLogin()
    {
        return view('admin-dashboard.views.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ])->validate();


        if(Auth::guard('admin')->attempt($validator, $request->boolean('remember'))){
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login')->with(['error' => 'Email Or Password is incorrect']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with(['error' => 'Logged Out Successfully']);
    }
}
