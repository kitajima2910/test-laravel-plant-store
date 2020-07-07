<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminFormLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

    public function index() {
        return view('adminlte.login');
    }

    public function loginAdmin(AdminFormLogin $request) {

        $email = $request->get('email');
        $password = $request->get('password');
        $remember = $request->has('remember') ? true : false;

        if(Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
            return redirect()->route('categories.index');
        } else {
            return back()->withInput()->withErrors(['errorLogin' => 'Địa chỉ email hoặc mật khẩu không đúng!!!']);
        }

    }

    function logoutAdmin() {
        Auth::logout();
        return redirect()->route('admin.login');
    }

}
