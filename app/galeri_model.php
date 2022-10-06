<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri_model extends Model
{
    protected $table = "tb_galeri";
    protected $fillable = ['image'];
}
