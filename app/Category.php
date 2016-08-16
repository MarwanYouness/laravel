<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
class Category extends Model
{
    use \Dimsav\Translatable\Translatable;
    public $translatedAttributes = ['name'];
     protected $fillable=[
    'slug',
    'name'
    ];

public function posts()
    {
    	return $this->hasMany(Post::class);
    }
    
}
