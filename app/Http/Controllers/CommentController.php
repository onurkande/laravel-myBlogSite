<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    function store(Request $request)
    {

        $comments = new Comment;
        
        $comments->name = $request->input('name');
        $comments->email = $request->input('email');
        $comments->comment = $request->input('comment');
        $blog_id = $request->input('blog_id');

        if($request->input('parent_id'))
        {
            $comments->parent_id = $request->input('parent_id');
        }

        $comments->blog_id = $blog_id;

        $comments->save();
        return redirect('/blog-details/'.$blog_id);
    }

    function view()
    {
        $comment = Comment::all();
        return $comment;
    }
}
