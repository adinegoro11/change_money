<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 1234;
        return view('home.index')->with('viewData', [
            'title' => 'Home Page - Online Store',
        ]);
    }

}
