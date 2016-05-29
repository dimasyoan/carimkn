<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warung extends Model
{
    //
    protected $fillable = ['id', 'namawarung', 'waktubuka', 'kategori', 'alamat'];

    public $timestamps = false;
    protected $table = 'warung';
}
