x<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client2;
class AnswerController extends Controller
{
    public function index() {
        $clients = Client2::orderBy('id', 'DESC')->get();
        //dd($clients)
        return view()
    }
}
