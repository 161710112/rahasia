<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $table = 'posts';
    protected $fillable = ['nama','umur','ttl','agama','sebagai'];
    public $timestamps = true;
}
