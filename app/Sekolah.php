<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sekolah extends Model
{
    public $table = "t_sekolah";

    protected $fillable = [
        'id_sekolah', 'nama_sekolah'
    ];
}
