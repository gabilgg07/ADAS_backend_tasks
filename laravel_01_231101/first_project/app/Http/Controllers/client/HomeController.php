<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        // -------- CORE SQL --------
        // $posts = DB::select("SELECT * from posts");
        // $posts = DB::select("SELECT * from posts where id=?", [5]);
        // dump($posts[0]->title);
        // dump($posts[0]->body);

        // $isInserted = DB::insert("INSERT into posts (`title`,`body`,`count`,`is_published`) values(?,?,?,?)", ['Title 101', 'Body 101', 45, true]);
        // dump($isInserted);
        // $deletedsCount = DB::delete("DELETE from posts where id<?", [50]);
        // dump($deletedsCount);
        // $updatedsCount = DB::update("UPDATE posts set `title`=? where id<?", ['Updated Title', 75]);
        // dump($updatedsCount);


        // -------- QUERY BUILDER --------

        // $posts = DB::table("posts")->get(); // butun postlar gelir

        // $data = collect(DB::table("posts")
        //     ->select("id", "title", "count")
        // ->where("id", "=", 51)
        // ->whereBetween("count", [20, 30])
        // ->whereNotBetween("count", [20, 30])
        // ->whereIn("id", [44, 55, 66, 77, 88])
        // ->whereNull("body")
        // ->orderBy("id", "desc")
        // ->skip(10)
        // ->take(10)
        // ->inRandomOrder()
        // ->first());
        // ->find(10));

        $data = DB::table("posts")
            ->select("id", "title", "count")
            // ->count("id")
            // ->count("body");
            // ->min("count");
            // ->max("count");
            // ->sum("count");
            ->avg("count");

        // dd($posts->skip(50));
        // dd($data?->title);
        // dd($data);
        dump($data);

        return view("client.home.index");
    }
}