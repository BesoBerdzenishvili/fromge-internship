<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class getProfile extends Controller
{
    public function showProfile() {
        return view('profile');
    }
}
