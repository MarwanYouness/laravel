<?php

namespace App\Http\Controllers;

use Request;
use App\Category;
use App\Post;
use App\PostTranslation;
use App\CategoryTranslation;
use App\Http\Requests;
use Lang;
use App;

class CategoriesController extends Controller
{
     public function index()
    {
       $categories = Category::get();
       return view('categories',compact('categories'));

    }

    public function list($id)
    {
    	$posts = Post::where('cat_id', $id)->get();
    	return view('posts',compact('posts'));

    }

    public function create()
    {

    	return view('createcategory');

    }

    public function store()
    {
    	$input = Request::all();
    	$data = [
    	'slug' => $input['slug'],
    	'en'  => ['name' => $input['en_name']],
    	'ar'  => ['name' => $input['ar_name']],
  ];

  $category = Category::create($data);

  return redirect('categories');
    	
    }

    public function allcat()
    {
    	$categories = Category::get();
       return view('categoriesedit',compact('categories'));
    }
    public function edit($id)
    {
    	$category = Category::find($id);
    	return view('editcategory',compact('category'));


    }

    public function update()
    {
    	$input = Request::all();
    	$data = array();
    	
		 $data = [
    	'name' => $input['name']
  ];
    	
   		$category = CategoryTranslation::where('id',$input['id'])->update($data);
   		return redirect('categories');

    }

    public function remove()
    {
    	$categories = Category::get();
       return view('removecategory',compact('categories'));

    }
    public function delete($id)
    {
    	$category = Category::where('id',$input['id'])->delete();
    	return redirect('categories');
    }




}
