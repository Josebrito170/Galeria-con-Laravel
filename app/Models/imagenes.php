<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class imagenes extends Model
{
    use HasFactory;

    protected $fillable = ['url', 'user_id'];

    //relacion de imagenes a user
    public function user(){
    	return $this->belongsTo('App\user');
    }
}
