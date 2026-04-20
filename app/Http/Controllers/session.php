<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index()
    {
        return view('session-counter');
    }
    
    public function clearSession(Request $request)
    {
        $request->session()->forget('page_views');
        return redirect('/session');
    }
}