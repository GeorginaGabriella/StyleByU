<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        if(auth()->user()->isAdmin())
        {
            return view('dashboard.admin');
        }
        return view('dashboard.user');
    }
}
