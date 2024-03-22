<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //
    public function index()
    {
        $comments = Comment::whereNull('parent_id')->with('replies')->get();
        return view('comments', compact('comments'));
    }
    public function store(Request $request, $blogId, $loginId, $pId){
        $data = $request->validate([
            'comment' => 'required',
        ]);

        $comment = new Comment;
        $comment->comment_content = $request->comment;
        $comment->blog_id = $blogId;
        $comment->user_id = $loginId;

        if($pId!=0){
            $comment->parent_id = $pId;
        }
        if($comment->save()){
            return back()->with('success','Comment added successfully.');
        }
        return redirect('/')->with('success','Comment added successfully.');
    }
}
