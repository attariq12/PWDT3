<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $table = "t_kelas";

    protected $fillable = [
        'id_kelas', 'id_sekolah', 'nama_kelas'
    ];
	
	public function data_sekolah() {
		return $this->hasOne('\App\Sekolah', 'id_sekolah', 'id_sekolah');
	}
}
