<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\History;


class ProfileController extends Controller
{
    //

    public function profile_page() {
        $user = Auth::user();
        // dd($user);
        return view('pages.profile.index', [
            'user' => $user
        ]);
    }

    public function edit_profile(Request $request) {

        $auth_user = Auth::user();

        $user = User::whereIn('status', ['active', 'nonactive'])->where('id', $auth_user->id)->first();
        
        if(!$user) {
            return back()->withErrors([
                'message' => 'User tidak ditemukan'
            ]);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $existingEmail = User::whereIn('status', ['active', 'nonactive'])->where('email', $request->email)->first();
        if($existingEmail && $existingEmail->email != $user->email) {
            return back()->withErrors(['message' => 'Email ini sudah terdaftar'])->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->status = $request->status;
        $user->role = $request->role;

        if($request->password || $request->old_password || $request->password_confirmation) {
            $validator = Validator::make($request->all(), [
                'password' => 'required|min:8|confirmed',
                'old_password' => 'required',
            ]);

            if($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }

            if(!Hash::check($request->old_password, $user->password)) {
                return back()->withErrors(['message' => 'Password lama salah!'])->withInput();
            }

            $user->password = Hash::make($request->password);

            History::create([
                'user_id' => $user->id,
                'description' => 'Mengubah password'
            ]);
        }
        
        $user->save();

        History::create([
            'user_id' => $user->id,
            'description' => 'Mengedit profile'
        ]);

        return back()->with('success', 'Berhasil memperbarui profile');
    }   
}
