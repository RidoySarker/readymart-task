<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts_data = Post::where('post_status' , 1)->get()->toArray();
        $data['section1_data'] = collect($posts_data)->where('post_section', 1);
        $data['section2_data'] = collect($posts_data)->where('post_section', 2);
        return view('Home.home',$data);
    }

    public function PostShow($id) {
        $data = Post::findOrFail($id);
        return view('Home.details', ['data' => $data]);
    }
}
