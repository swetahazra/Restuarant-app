<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    public $timestamps = false;
    protected $fillable = ['user_name', 'user_image'];
}
