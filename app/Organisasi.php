<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    protected $table = 'organisasis';
    protected $fillable = ['nama_organisasi','tempat_latihan','waktu_latihan','hari_latihan'];
    public $timestamps = true;
}
