<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\History;
use App\Models\User;


class AuthController extends Controller
{
    //
    function loginPage(){
        if(Auth::check()) {
            return redirect('/');
        }
        return view('pages.login.index');
    }

    function login(Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // $credentials = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);


        if(!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
            'status' => 'active'
        ])) {
            return back()->withErrors([
                'email' => 'Akun tidak ditemukan'
            ])->withInput();
        }

        $request->session()->regenerate();
        $user = User::whereIn('status', ['active', 'nonactive'])->where('email', $request->email)->first();

        if($user) {
            History::create([
                'user_id' => $user->id,
                'description' => 'Login'
            ]);
        }

        return redirect()->intended('/');
    }

    function logout(Request $request) {
        $user = Auth::user();

        History::create([
            'user_id' => $user->id,
            'description' => 'Logout'
        ]);

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
