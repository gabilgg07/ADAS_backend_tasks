<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // $posts = DB::table("posts")->get();
        // dd($posts);
        $posts = DB::select("SELECT * from posts");
        // $posts = DB::select("SELECT * from posts where id=?", [5]);
        // dump($posts[0]->title);
        // dump($posts[0]->body);

        // $isInserted = DB::insert("INSERT into posts (`title`,`body`,`count`,`is_published`) values(?,?,?,?)", ['Title 101', 'Body 101', 45, true]);
        // dump($isInserted);
        // $deletedsCount = DB::delete("DELETE from posts where id<?", [50]);
        // dump($deletedsCount);
        // $updatedsCount = DB::update("UPDATE posts set `title`=? where id<?", ['Updated Title', 75]);
        // dump($updatedsCount);
        return view("client.home.index");
    }
}