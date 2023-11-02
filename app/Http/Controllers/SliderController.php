<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Blog;

class SliderController extends Controller
{
    function index()
    {
        $blogs = app('App\Http\Controllers\BlogController')->view();
        $records=Slider::first();
        return view("admin.slider",["blogs"=> $blogs,"records"=> $records]);
    }

    function store(Request $request)
    {
        $slider = new Slider;
        $selectedBlogs = $request->input('selectedBlogs');
        if($selectedBlogs == null)
        {
            return redirect('dashboard/dynamic-edit/slider')->with('delete',"Hiçbir slider seçilmedi");
        }
        else
        {
            $selectedBlogs = json_encode($selectedBlogs, JSON_UNESCAPED_UNICODE);
            $slider->selectedBlogs = $selectedBlogs;
            $slider->save();
            return redirect('dashboard/dynamic-edit/slider')->with('store',"sliderlar eklendi");
        }
    }

    function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);
        $selectedBlogs = $request->input('selectedBlogs');
        if($selectedBlogs == null)
        {
            $slider->delete();
            return redirect('dashboard/dynamic-edit/slider')->with('delete',"Hiçbir slider seçilmedi");
        }else
        {
            $selectedBlogs = json_encode($selectedBlogs, JSON_UNESCAPED_UNICODE);
    
            // $selectedBlogs içeriğini güncelliyorsunuz
            $slider->selectedBlogs = $selectedBlogs;
    
            // Daha fazla gerekli işlemleri ekleyebilirsiniz, örneğin kaydetme işlemi
            $slider->save();
            return redirect('dashboard/dynamic-edit/slider')->with('update', "Sliderlar güncellendi");
        }
    }

    function view()
    {
        $records = Slider::first();
        if($records->count() === 0 || $records == null)
        {
            return null;
        }else
        {
            $selectedBlogs = json_decode($records->selectedBlogs, TRUE);
            $selectedBlogPosts = Blog::whereIn('id', $selectedBlogs)->get();
            // dd(gettype($selectedBlogPosts));
            return $selectedBlogPosts;
        }
    }
}
