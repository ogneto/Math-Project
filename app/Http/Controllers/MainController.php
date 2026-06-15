<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MainController extends Controller
{
    public function index(): View {
        return view('welcome');
    }

    public function about(): View {
        return view('about');
    }
}
