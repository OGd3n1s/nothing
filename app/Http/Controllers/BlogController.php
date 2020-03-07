<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class BlogController extends Controller
{
   public function view()
   {
       $posts = Post::orderby('created_at', 'DESC')->get();
       //dd($posts->user->name);
       return view('main.blog', ['posts' => $posts]);
   }
}
