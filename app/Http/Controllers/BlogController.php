<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index()
    {
        $records=Blog::all();
        return view("admin.blogs",["records"=>$records]);
    }

    function add()
    {
        $records=Category::all();
        return view("admin.add-blog",["records"=>$records]);
    }

    function store(Request $request)
    {
        $blog = new Blog;
        $user_id = Auth::id();
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('admin/blogImage',$filename);
            $blog->image = $filename;
        }

        $blog->title = $request->input('title');
        $blog->slug = $request->input('slug');

        $blog->content = $request->input('content');

        $blog->cate_id = $request->input('cate_id');
        $blog->user_id = $user_id;
        $blog->save();
        return redirect('dashboard/dynamic-edit/blogs')->with('store',"Blog eklendi");
    }

    function edit($id)
    {
        $category = Category::all();
        $records = Blog::find($id);
        return view('admin.edit-blog',['records'=>$records,'category'=>$category]);
    }

    function update(Request $request, $id)
    {
        $blog = Blog::find($id);

        if($request->hasFile('image'))
        {
            $path = 'admin/blogImage/'.$blog->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move('admin/blogImage',$filename);
            $blog->image = $filename;
        }

        $blog->title = $request->input('title');
        $blog->slug = $request->input('slug');

        $blog->content = $request->input('content');

        $blog->cate_id = $request->input('cate_id');
        $blog->save();
        return redirect('dashboard/dynamic-edit/blogs')->with('update',"Blog güncellendi");
    }

    function delete($id)
    {
        $blog = Blog::find($id);
        if($blog->image)
        {
            $path = 'admin/blogImage/'.$blog->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
        }
        $blog->delete();
        return redirect('dashboard/dynamic-edit/blogs')->with('delete',"Blog silindi");
    }

    function view()
    {
        $records = Blog::all();
        return $records;
    }
}
