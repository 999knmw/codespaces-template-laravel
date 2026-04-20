<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    // Page 1: Show the HTML form
    public function showForm()
    {
        return view('form');
    }
    
    // Page 2: Process and display GET data
    public function processForm(Request $request)
    {
        $userData = [
            'first_name' => $request->query('first_name'),
            'last_name' => $request->query('last_name'),
            'email' => $request->query('email'),
            'age' => $request->query('age'),
            'password' => $request->query('password'), // Note: GET exposes password in URL
        ];
        
        return view('form-result', compact('userData'));
    }
}