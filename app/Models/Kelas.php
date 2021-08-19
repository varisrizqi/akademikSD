<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $table = 'kelas';
    protected $guarded = [];

    public function guru()
    {
        return $this->hasOne(Guru::class, 'id', 'guru_id');
    }

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class, 'kelas_siswa', 'kelas_id', 'siswa_id');
    }
    
    public function pelajaran()
    {
        return $this->hasMany(Pelajaran::class, 'kelas_id', 'id');
    }

}
