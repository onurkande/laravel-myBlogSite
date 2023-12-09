<?php

namespace App\Http\Controllers;

use App\Livewire\Site\Blogs;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;

class FrontendController extends Controller
{
    function index()
    {
        $slider = app('App\Http\Controllers\SliderController')->view();
        return view("index",["slider"=> $slider]);
    }

    function blog_detail($slug)
    {
        // $records = Blog::find($slug);
        $records = Blog::where('slug', $slug)->first();

        $records->views++;
        $records->save();
        
        $comments = Comment::where('blog_id', $slug)->get();
        $blogs = Blog::all();
        return view('blog-single',['records'=>$records,'comments'=>$comments,'blogs'=>$blogs]);
    }

    function blogs()
    {
        return view('blogs');
    }

    function about()
    {
        $records = app('App\Http\Controllers\AboutController')->view();
        return view('about',['records'=>$records]);
    }
}
