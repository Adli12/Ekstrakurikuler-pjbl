<?php

namespace App\Http\Controllers\user;

use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\absen;
use App\Models\anggota;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Eskul;

class absenController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $search = $request->input('search');

        $anggotas = Anggota::with('eskul')
            ->where('id_eskul', $user->id_eskul)
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama_anggota', 'like', '%' . $search . '%')
                        ->orWhere('kelas', 'like', '%' . $search . '%');
                });
            })
            ->get();

        $eskuls = Eskul::all();

        return view('user.absen', compact('anggotas', 'eskuls'));
        // Tampilkan ke blade
    }

    public function store(Request $request)
    {
        $tanggal = $request->tanggal;

        foreach ($request->keterangan as $id_siswa => $ket) {
            Absen::create([
                'id_siswa' => $id_siswa,
                'nama_siswa' => $request->nama_siswa[$id_siswa],
                'kelas' => $request->kelas[$id_siswa],
                'keterangan' => $ket,
                'tanggal' => $request->tanggal,
            ]);
        }


        return redirect()->back()->with('success', 'Absensi berhasil disimpan.');
    }

    public function exportPDF(Request $request)
    {
        $keterangans = $request->input('keterangan');
        $tanggals = $request->input('tanggal');

        $data = [];

        foreach ($keterangans as $id => $keterangan) {
            $anggota = Anggota::find($id);
            $data[] = [
                'nama_anggota' => $anggota->nama_anggota,
                'kelas' => $anggota->kelas,
                'keterangan' => $keterangan,
                'tanggal' => $tanggals[$id],
            ];
        }

        $pdf = PDF::loadView('pdf', ['absenData' => $data]);
        return $pdf->download('laporan_absen.pdf');
    }
}
