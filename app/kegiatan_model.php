<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kegiatan_model extends Model
{
    protected $table = "tb_kegiatan";
    protected $fillable = ['judul','penjelasan','image'];
}
