<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class Exercise extends Controller
{
    //
    public function index(): View {
        return view('generate-exercises');
    }
}
