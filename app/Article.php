<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';
    protected $fillable = ['title','text','img'];
	
    
    
    public function user() {
		//return $this->belongsTo('Corp\User');
	}
	
	public function category() {
		//return $this->belongsTo('Corp\Category');
	}
	
	public function comments()
    {
        //return $this->hasMany('Corp\Comment');
    }	
	
}
