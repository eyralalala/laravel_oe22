<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function list()
    {
        $comments = Comment::all();
        $posts = Post::all();

        return view('comments.create', compact('posts', 'comments'));
    }

    public function store()
    {
        $data = request()->validate([

            'comment' => 'required',  
        ]);

        $comment = new Comment();
        $comment->comment = request('comment');
       
        $comment->save();

        return back();
    }
}
