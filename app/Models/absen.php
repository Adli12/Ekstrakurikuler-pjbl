<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class absen extends Model
{
    use HasFactory;

    protected $table = 'absen';
    protected $primaryKey = 'id_siswa';

    protected $fillable = [
        'tanggal',
        'nama_siswa',
        'kelas',
        'keterangan',
    ];

    public function anggota()
    {
        return $this->belongsTo(Anggota::class, 'id_siswa', 'id_anggota');
    }

}
