<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class HomeController extends Controller
{
    public function index()
    {
        Artisan::call('optimize');
        Artisan::call('optimize:clear');
        return view('home');
    }
}
