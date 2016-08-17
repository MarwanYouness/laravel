<?php

namespace App\Http\Controllers;

use Request;
use App\Post;
use App\PostTranslation;
use App\Http\Requests;
Use Lang;
use App\Category;
use App;

class PostController extends Controller
{
    public function show($id)
    {
    	$post = Post::find($id);
    	return view('showpost',compact('post'));
    }

    public function create()
    {
    	$categories = Category::all();
    	return view('postadd',compact('categories'));
    }

    public function store()
    {
    	$input = Request::all();
    	$data = [
    	'cat_id' => $input['cat_id'],
    	'en'  => ['name' => $input['en_name'],'desc' => $input['en_desc']],
    	'ar'  => ['name' => $input['ar_name'],'desc' => $input['ar_desc']],
  ];

  $post = Post::create($data);

  return redirect('home');
    }

    public function list()
    {
    	$posts = Post::get();
    	return view('listposts',compact('posts')); 
    }

    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::find($id);
        return view('editpost',compact('post','categories'));
    }

    public function update()
    {
        $input = Request::all();
        $data = [
        'name' => $input['name'],
        'desc' => $input['desc']
  ];
        
        $post = PostTranslation::where('post_id',$input['id'])->where('locale',App::getLocale())->update($data);
        $data = [
        'cat_id' => $input['cat_id']
  ];
        $post = Post::where('id',$input['id'])->update($data);
        return redirect('home');
    }

     public function remove()
    {
        $posts = Post::get();
       return view('removepost',compact('posts'));
    }
    public function delete($id)
    {
        $post = Post::where('id',$id)->delete();
        return redirect('home');

    }

}
