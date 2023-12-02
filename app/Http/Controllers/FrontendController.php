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

    function blog_detail($id)
    {
        $records = Blog::find($id);

        $records->views++;
        $records->save();
        
        $comments = Comment::all();
        $blogs = Blog::all();
        return view('blog-single',['records'=>$records,'comments'=>$comments,'blogs'=>$blogs]);
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

    public function search(Request $request)
    {
        // $query = $request->input('s');

        // $blogs = Blog::where('title', 'like', "%$query%")
        //     ->orWhere('cate_id', 'like', "%$query%")
        //     ->orWhere('content', 'like', "%$query%")
        //     ->get();

        // Bu noktada, elde edilen sonuçları bir değişkene atayabilir ve view'e gönderebilirsiniz.
        // return view('index', ['blogs' => $blogs]);

        $search = $request->search;

        $blogs = Blog::where(function($query) use ($search)
            {
                $query->where('title','like', "%$search%")
                ->orWhere('content','like',"%$search%");
            })
            ->orWhereHas('category', function($query) use ($search){
                $query->where('name','like', "%$search%");
            })->get();

        return view("index",compact("blogs","search"));
    }
}
