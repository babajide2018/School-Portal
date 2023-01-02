<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);



        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            /*check account type*/
            $account_type = Auth::user()->account_type;

            if ($account_type == 'admin'){
                return redirect()->route('admin-dashboard')->with('success', 'You are welcome');
            }

            if ($account_type == 'teacher'){
                return redirect()->route('teacher-dashboard')->with('success', 'You are welcome');
            }
            if ($account_type == 'parent'){
                return redirect()->route('parent-dashboard')->with('success', 'You are welcome');
            }

        }


        return back()->with('error', 'Sorry, You entered an invalid login credentials');
    }
}
