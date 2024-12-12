<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //
    public function home() {
        return view('home');
    }
    
    public function login() {
        return view('login');
    }
    
    public function market() {
        $products = [
            ['name' => 'Kentang', 'price' => 'Rp 20.000', 'image' => 'kentang.jpg'],
            ['name' => 'Ayam Potong', 'price' => 'Rp 50.000', 'image' => 'ayam.jpg'],
            // Tambahkan produk lainnya...
        ];
        return view('market', compact('products'));
    }
    
}

