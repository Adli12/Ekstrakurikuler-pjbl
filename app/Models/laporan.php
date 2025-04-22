<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laporan extends Model
{
    protected $table = 'laporan';
    protected $primaryKey = 'id_laporan';

    protected $fillable = [
        'id_eskul',
        'judul',
        'file',
        'tanggal_laporan'
    ];

    public function eskul()
    {
        return $this->belongsTo(Eskul::class, 'id_eskul');
    }
}
