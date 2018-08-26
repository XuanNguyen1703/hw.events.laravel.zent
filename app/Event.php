<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title','content','time','location'];
    public static function getAll(){
    	return Event::get();
    }
}
