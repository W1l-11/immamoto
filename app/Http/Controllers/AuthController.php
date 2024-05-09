<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

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
                Alert::alert('Berhasil Login', 'Login Sebagai Customer', 'success');
                return redirect('customer');
            } elseif ($user->user_type == 'dealer') {
                Alert::alert('Berhasil Login', 'Login Sebagai Dealer', 'success');
                return redirect('dealer');
            }
        }

        Alert::alert('Gagal Login', 'Password atau email tidak ditemukan', 'error');
        return back()->withInput();
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        try {
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
        } catch (QueryException $error) {
            Alert::alert('Gagal Register', '', 'error');
            return back()->withInput();
        } finally {
            Alert::alert('Berhasil Register', 'register', 'success');
            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}