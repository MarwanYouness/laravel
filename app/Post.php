<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	use \Dimsav\Translatable\Translatable;
	public $translatedAttributes = ['name','desc'];
    protected $fillable=[
    'cat_id',
    'name',
    'desc',
    'image'
    ];
}
