<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getMain extends Controller
{
    public function showMain() {
        return view('main');
    }
}
