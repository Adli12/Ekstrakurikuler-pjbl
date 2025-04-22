<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\eskul;
use App\Models\anggota;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function anggotaEskul($id_eskul)
    {
        $eskul = Eskul::findOrFail($id_eskul);
        $anggotas = Anggota::where('id_eskul', $id_eskul)->get();

        return view('admin.anggota', compact('anggotas', 'eskul'));
    }
}
