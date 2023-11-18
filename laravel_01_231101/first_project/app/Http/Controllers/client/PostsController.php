<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        // echo "<h1>Post Index</h1>";
        // return view("welcome");
        return view("client.posts.index");
    }
    public function detail()
    {
        return view("client.posts.detail");
    }
}