<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\anggota;
use App\Models\eskul;
use Illuminate\Http\Request;

class adminAnggotaController extends Controller
{
    public function showAnggotaEskul($id_eskul)
    {
        $anggotas = Anggota::where('id_eskul', $id_eskul)->get();
        return view('admin.anggota', compact('anggotas'));
    }

    public function anggotaEskul($id_eskul)
    {
        $eskul = Eskul::findOrFail($id_eskul);
        $anggotas = Anggota::where('id_eskul', $id_eskul)->get();

        return view('admin.eskul', compact('anggotas', 'eskul'));
    }
}
