<?php

namespace App\Http\Controllers\user;

use App\Models\Anggota;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Eskul;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class anggotaPostController extends Controller
{
    // Menampilkan semua anggota
    public function index(Request $request)
    {
        $user = Auth::user();

        $search = $request->input('search');

        $anggotas = Anggota::with('eskul')
            ->where('id_eskul', $user->id_eskul) // tambahkan filter eskul di sini
            ->when($search, function ($query, $search) {
                $query->where('nama_anggota', 'like', '%' . $search . '%')
                    ->orWhere('kelas', 'like', '%' . $search . '%');
            })
            ->paginate(10);

        $eskuls = Eskul::all();

        return view('user.anggota', compact('anggotas', 'eskuls'));
    }

    public function absen(Request $request)
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
    }

    // Menyimpan anggota baru
    public function store(Request $request)
    {
        $request->validate([
            'nama_anggota' => 'required|string|max:255',
            'kelas' => 'required|string|max:10',
            'jurusan' => 'required|string|max:50',

        ]);

        Anggota::create([
            'nama_anggota' => $request->nama_anggota,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'id_eskul' => Auth::user()->id_eskul,
        ]);

        return redirect()->route('user.anggota')->with('success', 'Anggota berhasil ditambahkan');
    }

    // Mengambil data untuk diedit (jika perlu form edit terpisah)
    public function edit($id)
    {
        $anggota = Anggota::findOrFail($id);
        $eskuls = Eskul::all();
        return view('user.edit_anggota', compact('anggotas', 'eskuls'));
    }

    // Update data anggota
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_anggota' => 'required|string|max:255',
            'kelas' => 'required|string|max:10',
            'jurusan' => 'required|string|max:50',
        ]);

        $anggota = Anggota::findOrFail($id);
        $anggota->nama_anggota = $request->nama_anggota;
        $anggota->kelas = $request->kelas;
        $anggota->jurusan = $request->jurusan;
        $anggota->save();

        return redirect()->route('user.anggota', ['anggota' => $anggota])->with('success', 'Data anggota berhasil diupdate');
    }


    // Hapus anggota
    public function destroy($id)
    {
        $anggota = Anggota::findOrFail($id);
        $anggota->delete();

        return redirect()->route('user.anggota')->with('success', 'Data anggota berhasil dihapus');
    }

    public function exportPDF(Request $request)
    {
        $absenData = $request->input('absen');

        $filteredAnggota = [];

        foreach ($absenData as $id => $data) {
            if (isset($data['keterangan']) && isset($data['tanggal'])) {
                $filteredAnggota[] = (object) [
                    'nama_anggota' => $data['nama_siswa'],
                    'kelas' => $data['kelas'],
                    'keterangan_temp' => $data['keterangan'],
                    'tanggal_temp' => $data['tanggal'],
                ];
            }
        }

        $pdf = PDF::loadView('pdf', ['anggotas' => $filteredAnggota]);
        return $pdf->download('data_absensi.pdf');
    }
}
