<?php

namespace App\Models;

use App\Models\anggota;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eskul extends Model
{
    use HasFactory;

    protected $table = 'eskul';
    protected $primaryKey = 'id_eskul';

    protected $fillable = [
        'nama_eskul',
        'nama_ketua',
        'kelas',
    ];

    // Relasi: satu eskul punya banyak anggota
    public function anggota()
    {
        return $this->hasMany(anggota::class, 'id_eskul');
    }
}
