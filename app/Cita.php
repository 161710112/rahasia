<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $table = 'citas';
    protected $fillable = ['nama','kelas','alamat','cita_cita'];
    public $timestamps = true;
}
