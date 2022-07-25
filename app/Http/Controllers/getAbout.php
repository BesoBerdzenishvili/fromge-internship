<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getAbout extends Controller
{
    public function showAbout() {
        return view('about');
    }
}
