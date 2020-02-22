<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About extends Controller
{
    public function show() {
        $a = 10;
        $b = 20;
        $c = $a + $b;
        return view('about', ['c' => $c, 'a' => $a]);
    }
}
