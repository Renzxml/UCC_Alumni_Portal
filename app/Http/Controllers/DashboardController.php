<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // This will return the dashboard view
        return view('dashboard');
    }
}
