<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __construct(Post $post){

        $this->post = $post;

    }

    public function index()
    {
        $posts = $this->post->get();
        return view('blog.index',compact('posts'));
    }
    public function single($slug){

            $post = $this->post->where('slug','=',$slug)-> first();
        return  view('blog.single',compact('post'));
    }
    public function edit($slug){
        $post = $this->post->where('slug','=',$slug)-> first();
        return  view('blog.edit',compact('post'));
    }

}
