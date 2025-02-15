<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class GreetController extends Controller
{
    public function greet(): View
    {
        return view('greet');
    }
}
