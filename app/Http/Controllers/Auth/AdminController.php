<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function adminLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();


            if ($user->role === 'admin'&&$user->access_status === 'granted') {
                return redirect()->route('admin.index', ['id' => $user->id]);
            }elseif($user->access_status === 'pending'){
                Auth::logout();
                return back()->withErrors(['Error' => 'Status is still PENDING. Please contact advisor ASAP.']);
            }elseif($user->access_status === 'revoked'){
                Auth::logout();
                return back()->withErrors(['Error' => 'Status is REVOKED. Please contact advisor ASAP.']);
            }else{
                Auth::logout();

                return back()->withErrors(['email' => 'Access denied. Only admins can log in.']);
            }


        }

        return back()->withErrors(['email' => 'Invalid email or password.']);
    }

}
