<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class admingalleryController extends Controller
{
    public function index()
    {
        // ambil semua data galeri dari semua user
        $galleries = Gallery::all();
        return view('admin.gallery', compact('galleries'));
    }
}
