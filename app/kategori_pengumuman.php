<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori_pengumuman extends Model
{
    protected $table="kategori_pengumuman";

    protected $fillable=['user_id','nama'];
}
