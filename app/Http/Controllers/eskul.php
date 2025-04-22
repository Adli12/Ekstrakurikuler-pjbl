<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class eskul extends Controller
{
    public function index()
    {
        $eskulList = DB::table('eskul')->get();
        return view('admin.dashboard', compact('eskulList'));
    }

    // TAMPILKAN FORM EDIT
    public function edit($id)
    {
        $eskul = DB::table('eskul')->where('id_eskul', $id)->first();
        return view('admin.dashboard', compact('eskul'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        DB::table('eskul')->where('id_eskul', $id)->update([
            'nama_eskul' => $request->nama_eskul,
            'nama_ketua' => $request->nama_ketua,
            'kelas' => $request->kelas,
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil diupdate!');
    }

    // HAPUS DATA
    public function destroy($id)
    {
        DB::table('eskul')->where('id_eskul', $id)->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Data berhasil dihapus!');
    }
}
