<?php

namespace App\Http\Controllers\user;

use App\Models\laporan;
use App\Models\eskul;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class laporanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Ambil ID eskul dari user yang sedang login
        $user = auth()->user()->id_eskul;

        // Ambil laporan hanya milik eskul user tersebut
        $laporans = Laporan::with('eskul')
            ->where('id_eskul', $user)
            ->when($search, function ($query, $search) {
                $query->where('judul', 'like', '%' . $search . '%');
            })
            ->get();

        return view('user.laporan', compact('laporans'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png',
            'tanggal_laporan' => 'required|date',
        ]);

        $filename = $request->file('file')->store('laporan', 'public');

        Laporan::create([
            'id_eskul' => Auth::user()->id_eskul, // sesuai login ketua eskul
            'judul' => $request->judul,
            'file' => $filename,
            'tanggal_laporan' => $request->tanggal_laporan,
        ]);

        return redirect()->back()->with('success', 'Laporan berhasil dikirim.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'file' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,jpg,jpeg,png',
            'tanggal_laporan' => 'required|date', // tambahkan validasi tanggal
        ]);

        $laporan = Laporan::findOrFail($id);

        // Jika user upload file baru, simpan dan ganti file lama
        if ($request->hasFile('file')) {
            Storage::disk('public')->delete($laporan->file);
            $filename = $request->file('file')->store('laporan', 'public');
            $laporan->file = $filename;
        }

        // Update judul dan tanggal_laporan
        $laporan->judul = $request->judul;
        $laporan->tanggal_laporan = $request->tanggal_laporan;
        $laporan->save();

        return redirect()->route('user.laporan')->with('success', 'Laporan berhasil diperbarui.');
    }



    public function download($id)
    {
        $laporan = Laporan::findOrFail($id);
        $path = storage_path('app/public/' . $laporan->file);

        // Ambil nama file dari kolom judul, dan tambahkan ekstensi asli file
        $ext = pathinfo($laporan->file, PATHINFO_EXTENSION);
        $cleanTitle = preg_replace('/[^A-Za-z0-9_\-]/', '_', $laporan->judul); // hilangkan karakter aneh
        $filename = $cleanTitle . '.' . $ext;

        return response()->download($path, $filename);
    }


    public function destroy($id)
    {
        $laporan = Laporan::findOrFail($id);

        if (Storage::disk('public')->exists($laporan->file)) {
            Storage::disk('public')->delete($laporan->file);
        }

        $laporan->delete();
        return redirect()->back()->with('success', 'Laporan berhasil dihapus.');
    }
}
