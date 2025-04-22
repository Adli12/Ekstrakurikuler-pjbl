<?php

namespace App\Http\Controllers\admin;

use App\Models\laporan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminlaporanController extends Controller
{
    public function index()
    {
        // Ambil relasi eskul bukan admin
        $laporans = Laporan::with('eskul')->orderBy('tanggal_laporan', 'desc')->get();

        return view('admin.laporan', compact('laporans'));
    }
}
