<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.admin.login');
    }

    public function login(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('admin.dashboard')->with('success', 'Login successfully');
        } else {

            return back()->with('error', 'Invalid Email or Password');
        }
    }

    public function dashboard()
    {
        return view('admin-dashboard');
    }
}
