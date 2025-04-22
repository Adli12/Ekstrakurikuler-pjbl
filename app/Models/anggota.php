<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class anggota extends Model
{
    use HasFactory;

    protected $table = 'anggota';
    protected $primaryKey = 'id_anggota';

    protected $fillable = [
        'nama_anggota',
        'kelas',
        'jurusan',
        'id_eskul'
    ];


    public function eskul()
    {
        return $this->belongsTo(eskul::class, 'id_eskul');
    }
}
