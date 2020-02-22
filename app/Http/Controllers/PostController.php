<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class PostController extends Controller
{
    public function index(Request $request) {
   //    var_dump($request->all());
    //    var_dump($request->password);
    //    var_dump($request->email);
      
        $st = Student::where('age', '=', 21)->first();
        $re = $st->fname;
        dd($st);
        
        return view('welcome');
      
      
        
    }
}
