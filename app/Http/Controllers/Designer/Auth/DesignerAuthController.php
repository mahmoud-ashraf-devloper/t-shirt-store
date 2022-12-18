<?php

namespace App\Http\Controllers\Designer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DesignerAuthController extends Controller
{
    public function getLogin()
    {
        return view('designer-dashboard.views.auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ])->validate();


        if(Auth::guard('designer')->attempt($validator, $request->boolean('remember'))){
            return redirect()->route('designer.dashboard');
        }
        return redirect()->route('designer.login')->with(['error' => 'Email Or Password is incorrect']);
    }

    public function logout(Request $request)
    {
        Auth::guard('designer')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('designer.login')->with(['error' => 'Logged Out Successfully']);
    }
}
