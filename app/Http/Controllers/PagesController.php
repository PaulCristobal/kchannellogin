<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Knowledge Channel';
        return view('pages.index', compact('title'));
    }

    public function login(){
        $title = 'LOGIN';
        return view('pages.login', compact('title'));
    }

    public function register(){
        $title = 'REGISTER';
        return view('pages.register', compact('title'));
    }
}
