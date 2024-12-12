<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarketplaceController extends Controller
{
    //
    public function index()
    {
        // Mendefinisikan produk (misalnya array produk statis atau dari database)
        $products = [
            [
                'name' => 'Chili',
                'price' => '5000',
                'image' => 'cabai rawit.webp',
            ],
            [
                'name' => 'Timun',
                'price' => '3000',
                'image' => 'Timun.webp',
            ],
            [
                'name' => 'Wortel',
                'price' => '4000',
                'image' => 'Wortel.webp',
            ],
            // Tambahkan produk lainnya
        ];

        // Mengirimkan variabel produk ke view marketplace
        return view('marketplace', compact('products'));
    }
}
