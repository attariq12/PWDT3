<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public $table = "t_siswa";
	public $primaryKey = "nis";
	public $timestamps = FALSE;

    protected $fillable = [
        'nis', 'id_kelas', 'nama_lengkap', 'alamat', 'no_telp'
    ];
	
	// Eloquent Relationship
	public function data_kelas() {
		return $this->hasOne('\App\Kelas', 'id_kelas', 'id_kelas');
	}
}
