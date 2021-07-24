<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\SignupRequest;
use App\User;
use App\Optimized;
use Curl;

class UserController extends MainController
{
    public function getLogin(Request $request)
    {
        self::$viewData['page_title'] .= 'Sign in or Sign up';
        self::$viewData['rn'] = !empty($request['rn']) ? '?rn=' . $request['rn'] : '';
        return view('login', self::$viewData);
    }

    public function postLogin(LoginRequest $request)
    {
        if (User::validate($request['email'], $request['password'])) {
            $rn = !empty($request['rn']) ? $request['rn'] : '';
            return redirect($rn);
        } else {
            self::$viewData['page_title'] .= 'Sign in or Sign up';
            self::$viewData['login_error'] = 'Wrong Email or Password';
            return view('login', self::$viewData);
        }
    }

    public function logout(Request $request)
    {
        // Session::forget(['user_id', 'user_name', 'is_admin']);
        $request->session()->forget(['user_id', 'user_name', 'is_admin']);
        return redirect('user/login');
    }

    public function getSignup()
    {
        self::$viewData['page_title'] .= 'Sign up';
        self::$viewData['countries'] = Optimized::getCountries();
        return view('signup', self::$viewData);
    }

    public function postSignup(SignupRequest $request)
    {
        User::save_new($request);
        $rn = !empty($request['rn']) ? $request['rn'] : '';
        return redirect($rn);
    }
}
