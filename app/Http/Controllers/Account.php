<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Account extends Controller
{
    public function index()
    {
         return view('pages.accounts');
    }
}
