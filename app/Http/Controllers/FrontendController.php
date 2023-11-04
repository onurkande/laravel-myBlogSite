<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class FrontendController extends Controller
{
    function index()
    {
        $blogs = app('App\Http\Controllers\BlogController')->view();
        $slider = app('App\Http\Controllers\SliderController')->view();
        return view("index",["blogs"=> $blogs,"slider"=> $slider]);
    }

    function blog_detail($id)
    {
        $records = Blog::find($id);
        return view('blog-single',['records'=>$records]);
    }

    function blogs()
    {
        $records = Blog::all();
        return view('blogs',['records'=>$records]);
    }

    function about()
    {
        $records = app('App\Http\Controllers\AboutController')->view();
        return view('about',['records'=>$records]);
    }
}
