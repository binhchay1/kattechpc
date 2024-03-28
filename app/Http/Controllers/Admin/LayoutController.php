<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayoutController extends Controller
{
    public function viewCustomLayout()
    {
        return view('admin.layout.index');
    }
}
