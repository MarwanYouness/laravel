<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\PostTranslation;
use App\Http\Requests;
Use Lang;

class PostController extends Controller
{
    public function show($id)
    {
    	$post = Post::find($id);
    	return view('showpost',compact('post'));
    }
}
