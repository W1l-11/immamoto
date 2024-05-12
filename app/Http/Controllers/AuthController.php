<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
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
                alert('Berhasil Login', 'Login Sebagai Customer', 'success');
                return redirect('customer');
            } elseif ($user->user_type == 'dealer') {
                alert('Berhasil Login', 'Login Sebagai Dealer', 'success');
                return redirect('dealer');
            }
        }

        alert('Gagal Login', 'Password atau email tidak ditemukan', 'error');
        return back()->withInput();
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registerProcess(Request $request)
    {
        try {
            $user['name'] = $request->name;
            $user['email'] = $request->email;
            $user['number'] = $request->number;
            $user['address'] = $request->address;
            $user['user_type'] = $request->user_type;
            $user['password'] = $request->password;

            if (User::where('email', $user['email'])->count() > 0) {
                alert('Gagal register', 'Email telah digunakan', 'error');
                return back()->withInput();
            }

            if (User::where('number', $user['number'])->count() > 0) {
                alert('Gagal register', 'Nomor HP telah digunakan', 'error');
                return back()->withInput();
            }

            if ($user['password'] != $request->retype_password) {
                alert('Gagal register', 'Password tidak sama', 'error');
                return back()->withInput();
            }

            $user['password'] = Hash::make($request->password);


            // dd($user);
            User::create($user);
            alert('Berhasil Register', 'Register berhasil', 'success');
            return redirect()->route('login');
        } catch (Exception $error) {
            alert('Gagal register', 'Register gagal', 'error');
            return back()->withInput();
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
