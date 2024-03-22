<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Registration;
use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class BlogController extends Controller
{
    //

    public function show($id)
    {
        session(['blog_id' => $id]);
        // $blog = Blog::find($id);
        // //$comments = $blog->comments;

        // $comments = Comment::where('blog_id', $id)->get();

        $data=array();
        if(Session::has('loginId')){
            $data = Registration::where('id','=', Session::get('loginId'))->first();
        }
        // return view('blog_desc', compact('data','blog','comments'));


        $blog = Blog::with(['comments' => function($query) {
            $query->whereNull('parent_id');
        }, 'comments.user'])->find($id);

        if (!$blog) {
            return redirect('/blog')->with('error', 'Blog post not found');
        }
        
        return view('blog_desc', compact('data','blog'));
    }

}


//if ($blog === null) {
        //     // Handle the case where the blog post is not found
        //     // For example, redirect to a 404 page or the blog list
        //     return redirect('/blog')->with('error', 'Blog post not found');
        // }
