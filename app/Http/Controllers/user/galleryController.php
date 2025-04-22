<?php

namespace App\Http\Controllers\user;

use App\Models\gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class galleryController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');

        // Ambil ID eskul dari user yang sedang login
        $user = auth()->user()->id_eskul;

        // Ambil gallery hanya milik eskul user tersebut
        $galleries = Gallery::where('id_eskul', $user)
            ->when($search, function ($query, $search) {
                $query->where('judul', 'like', '%' . $search . '%');
            })
            ->paginate(10);

        return view('user.gallery', compact('galleries'));
    }


    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
            'tanggal' => 'required|date',
        ]);

        // Ambil file gambar
        $file = $request->file('foto');

        // Buat nama file unik
        $filename = time() . '_' . $file->getClientOriginalName();

        // Simpan file ke folder public/uploads/gallery
        $file->move(public_path('uploads/img/'), $filename);

        // Simpan data ke database
        Gallery::create([
            'judul' => $request->judul,
            'foto' => $filename,
            'tanggal' => $request->tanggal,
            'id_eskul' => Auth::user()->id_eskul,
        ]);

        return redirect()->back()->with('success', 'Foto berhasil ditambahkan ke galeri!');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $gallery = Gallery::findOrFail($id);
        $gallery->judul = $request->judul;
        $gallery->tanggal = $request->tanggal;

        // Jika ada file baru diupload
        if ($request->hasFile('foto')) {
            // Hapus file lama
            $oldFile = public_path('uploads/img/' . $gallery->foto);
            if (file_exists($oldFile)) {
                unlink($oldFile);
            }

            // Upload file baru
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/img/'), $filename);

            $gallery->foto = $filename;
        }

        $gallery->save();

        return redirect()->back()->with('success', 'Galeri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        $filePath = public_path('uploads/img/' . $gallery->foto);
        if (file_exists($filePath)) {
            unlink($filePath);
        }
        $gallery->delete();

        return redirect()->route('user.gallery')->with('success', 'Foto berhasil dihapus');
    }
}
