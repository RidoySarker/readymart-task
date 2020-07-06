<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Validator;
use Toastr;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['post'] = Post::all();
        return view('Admin.Posts.allpost', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Posts.new_post');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post_model = new Post;
        $request_data = $request->all();
        $validate = $post_model->validation();
        if ($request->post_type == 1) {
           $validate = Arr::add($validate, "post_image","required|unique:posts,post_image||image|mimes:jpeg,png,jpg,gif,svg|max:2048");

        } else if($request->post_type == 2) {
            $validate = Arr::add($validate, "post_image","required|unique:posts,post_image||image|mimes:jpeg,png,jpg,gif,svg|max:2048");
            $validate = Arr::add($validate, "post_video","required|unique:posts,post_video");
        }
        else{
            $validate = $validate;
        }
        $validateData = Validator::make($request_data,$validate);
        if ($validateData->fails()) {
            Toastr::warning('Validation Failed', 'Warning', ["positionClass" => "toast-bottom-right"]);
            return back()->withErrors($validateData)->withInput($request_data);
        }
        $image = $request->file('post_image');
        $path = "images/post";
        $new_name = $image->getClientOriginalName();
        $image = $request->file('post_image')->move($path, $new_name);

        $post_model->post_title = $request->post_title;
        $post_model->post_type = $request->post_type;
        $post_model->post_section = $request->post_section;
        $post_model->post_image = $image;
        $post_model->post_content = $request->post_content;
        $post_model->post_video = $request->post_video;
        $post_model->save();
        Toastr::success('Post Added Successfully', 'Success', ["positionClass" => "toast-bottom-right"]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post_model = Post::findOrFail($id);
        if ($post_model->post_status == 1):
            $post_model->update(['post_status' => 0]);
            Toastr::success('Post Unpublished', 'Success', ["positionClass" => "toast-bottom-right"]);
            return back();
        else:
            $post_model->update(['post_status' => 1]);
            Toastr::success('Post published', 'Success', ["positionClass" => "toast-bottom-right"]);
            return back();
        endif;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
