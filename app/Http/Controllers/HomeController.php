<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function viewHome()
    {
        return view('page.homepage');
    }

    public function viewPolicy()
    {
        return view('page.policy');
    }

    public function viewPromotion()
    {
        return view('page.homepage');
    }

    public function viewAccount()
    {
        return view('page.account');
    }
    
    public function viewPost()
    {
        return view('page.post');
    }
    
}
