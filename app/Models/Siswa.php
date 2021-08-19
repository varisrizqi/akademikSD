<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Siswa extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'siswa';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected $fillable = [
    //     'name',
    //     'nipdn',
    //     'jenis_kelamin',
    //     'nisn',
    //     'tempat_lahir',
    //     'tanggal_lahir',
    //     'nik',
    //     'email',
    //     'password',
    // ];

    protected $guarded = [];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function kelas()
    {
        return $this->belongsToMany(Siswa::class, 'kelas_siswa', 'siswa_id', 'kelas_id');
    }
}
