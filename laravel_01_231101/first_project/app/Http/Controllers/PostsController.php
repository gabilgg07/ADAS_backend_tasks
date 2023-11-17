<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        // echo "<h1>Post Index</h1>";
        return view("welcome");
    }
    public function detail()
    {
        return view("posts.detail");
    }
}