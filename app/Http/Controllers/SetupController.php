<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\SetupApp;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SetupController extends Controller
{
    //
    public function page(){
        $setup = SetupApp::first();
        if($setup && $setup->status == 1) {
            return redirect('/');   
        }
        return view('pages.setup.index');
    }

    public function post(Request $request) {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        if($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $userCreated = User::create([
            'id' => Str::uuid(),
            'name' => $request->email,
            'email' => $request->email,
            'role' => 'super-admin',
            'status' => 'active',
            'password' =>  Hash::make($request->password)
        ]);

        if(!$userCreated) {
            return back()->withErrors([
                'message' => 'Server Error'
            ])->withInput();
        }

        $setup = SetupApp::first();

        if(!$setup) {
            $created = SetupApp::create([
                'status' => 1
            ]);

            if(!$created) {
                return back()->withErrors([
                    'message' => 'Server Error'
                ])->withInput();
            }
        } else {
            $setup->status = 1;
            $setup-save();
        }

        return redirect('/');
    }
}
