<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;

class DashboardController extends Controller
{
    public function index(){
        Dashboard::all();
        return view('dashboard.index')->with('dashboard', $dashboard);
    }
}

