<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    protected $redirectTo = '/';

    public function login()
    {
        return view('auth.login');
    }

    public function loginProcess(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $request->session()->regenerate();

            if ($user->user_type == 'customer') {
                return redirect('customer');
            } elseif ($user->user_type == 'dealer') {
                return redirect('customer');
            }
        }

        return back()->withInput();
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        $user = new User();
        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user['number'] = $request->number;
        $user['address'] = $request->address;
        $user['user_type'] = $request->user_type;
        if ($request->retype_password != $request->password) {
            return redirect()->back();
        }
        $user['password'] = Hash::make($request->password);

        $user->save();
        return redirect()->route('login');
    }
}