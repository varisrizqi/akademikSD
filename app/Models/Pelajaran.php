<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajaran extends Model
{
    use HasFactory;

    protected $table = 'pelajaran';
    protected $guarded = [];
    // protected $casts = [
    //     'jam_masuk' => 'date:hh:mm',
    //     'jam_keluar' => 'date:hh:mm'
    // ];

    public function guru()
    {
        return $this->hasOne(guru::class, 'id', 'guru_id');
    }
    
    public function kelas()
    {
        return $this->hasOne(Kelas::class, 'id', 'kelas_id');
    }



}
