<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('produk.index'); // Menampilkan halaman daftar produk
    }

    public function create()
    {
        return view('produk.create'); // Menampilkan form tambah produk
    }

    public function store(Request $request)
    {
        // Logika menyimpan produk ke database
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan!');
    }


 


}
