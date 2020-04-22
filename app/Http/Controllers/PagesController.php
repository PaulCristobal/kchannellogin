<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome';
        return view('pages.index', compact('title'));
    }

    public function login(){
        $title = 'Login';
        return view('pages.login', compact('title'));
    }

    public function dashboard(){
        $title = 'Dashboard';
        return view('pages.dashboard', compact('title'));
    }
}
