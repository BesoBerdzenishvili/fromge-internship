<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GetBlog extends Controller
{
    public function showBlog() {
        return view('blog');
    }
}
