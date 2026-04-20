<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CpanelController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }
    
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
            'first_name' => 'required',
            'last_name' => 'required',
            'age' => 'required|numeric|min:1|max:150'
        ]);
        
        // Store user data in session
        Session::put('user', [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'age' => $request->age
        ]);
        Session::put('is_logged_in', true);
        
        return redirect()->route('cpanel');
    }
    
    public function cpanel()
    {
        if (!Session::get('is_logged_in')) {
            return redirect()->route('login.show');
        }
        
        $user = Session::get('user');
        return view('cpanel', compact('user'));
    }
    
    public function logout()
    {
        Session::forget(['user', 'is_logged_in']);
        return redirect('/');
    }
}