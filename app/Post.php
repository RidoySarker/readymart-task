<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Post extends Model
{
    protected $table = 'posts';
    protected $primaryKey = 'post_id';
    protected $fillable = ['post_title', 'post_type', 'post_section', 'post_image','post_video','post_content','post_status','created_by','updated_by'];

    public function validation()
    {
    	return [
    		'post_title' => 'required|unique:posts,post_title',
    		'post_type'      => 'required',
    		'post_section'      => 'required',
    		'post_content'      => 'required',
    	];
    }

    public function video()
    {
    	return [
    		'post_title' => 'required|unique:posts,post_title',
    		'post_type'      => 'required',
    		'post_section'      => 'required',
            'post_content'      => 'required',
            'post_image'      => 'required|unique:posts,post_image||image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    		'post_video'      => 'required|unique:posts,post_video',
    	];
    }

    public static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->created_by = Auth::user()->id;
        });

        static::updating(function ($model) {
            $model->updated_by = Auth::user()->id;
        });
    }
}
