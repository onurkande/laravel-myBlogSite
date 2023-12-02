<?php

namespace App\Http\Controllers;

use App\Models\BlogPostNotificationn;
use App\Mail\BlogPostNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Blog;

class BlogPostNotificationController extends Controller
{
    function store(Request $request)
    {
        $BlogPostNotificationn = new BlogPostNotificationn;
        $email = $request->input('email');

        $BlogPostNotificationn->email = $email;
        $BlogPostNotificationn->save();
        return redirect('/');
    }

    public function subscribe($lastId)
    {
        $BlogPostNotificationn =BlogPostNotificationn::all();
        $blog = Blog::find($lastId);

        $data = [
            'title'=>$blog->title,
            'image'=>$blog->image,
            'content'=>$blog->content,
            'category'=>$blog->category->name,
            'created_at'=>$blog->created_at
        ];
        foreach($BlogPostNotificationn as $single)
        {
            Mail::to($single->email)->send(new BlogPostNotification($data));
        }
    }
}
