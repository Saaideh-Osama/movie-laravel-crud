<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $data=Post::all();
        return view('posts.dashboard',['data'=>$data]);
    }
}
