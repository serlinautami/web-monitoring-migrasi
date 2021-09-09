<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    //
    public function page() {
        $users = User::whereIn('status', ['active', 'nonactive'])->orderBy('name', 'asc')->paginate(10);
        return view('pages.user.index', [
            'users' => $users
        ]);
    }

    public function add_user_page() {
        return view('pages.user.form', ['user' => null]);
    }

    public function edit_user_page($id) {
        $user = User::whereIn('status', ['active', 'nonactive'])->where('id', $id)->first();
        if(!$user) {
            return back()->withErrors([
                'message' => 'User tidak ditemukan'
            ]);
        }
        return view('pages.user.form', [
            'user' => $user
        ]);
    }

    public function get_user($id) {

        if(!Auth::check()) {
            return response()->json([
                'status' => 0,
                'message' => 'Akses ditolak'
            ], 403);
        }
        $user = User::whereIn('status', ['active', 'nonactive'])->where('id', $id)->first();
        return response()->json([
            'status' => 1,
            'data' => $user 
        ], 200);
    }

    public function add_user(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $existingEmail = User::whereIn('status', ['active', 'nonactive'])->where('email', $request->email)->first();

        if($existingEmail) {
            return back()->withErrors([
                'message' => 'Email ini sudah terdaftar'
            ])->withInput();
        }

        $user = User::create([
            'id' => Str::uuid(),
            'name' => $request->name,
            'email' => $request->email,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'role' => $request->role,
            'status' => $request->status,
            'password' => Hash::make($request->password) 
        ]);

        if(!$user) {
            return back()->withErrors([
                'message' => 'Server Error'
            ])->withInput();
        }

        return redirect('/user')->with('success', 'Berhasil menyimpan data user');
    }

    public function delete_user($id) {
        $user = User::whereIn('status', ['active', 'nonactive'])
                    ->where('id', $id)->first();

        if(!$user) {
            return response()->json([
                'status' => 0,
                'message' => 'User tidak ditemukan'
            ], 404);
        }

        $user->status = 'deleted';
        $user->save();

        return response()->json([
            'status' => 1,
            'message' => 'User berhasil dihapus'
        ], 200);
    }

    public function edit_user(Request $request, $id) {

        $user = User::whereIn('status', ['active', 'nonactive'])->where('id', $id)->first();
        
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

        $existingEmail = User::whereIn('status', ['active', 'nonactive'])->where('email', $request->email);
        if($existingEmail && $existingEmail != $user->email) {
            return back()->withErrors(['message' => 'Email ini sudah terdaftar'])->withInput();
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->dob = $request->dob;
        $user->status = $request->status;
        $user->role = $request->role;

        $user->save();

        return redirect('/user')->with('success', 'Berhasil memperbarui data user');
    }
}
