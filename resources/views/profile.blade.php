@extends('layouts.app')

@section('title', 'Profile Perusahaan')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold">Tentang Perusahaan Kami</h1>
    
    <div class="mt-4">
        <h2 class="text-xl font-semibold">Visi Kami</h2>
        <p>
            Visi kami adalah untuk menciptakan sebuah platform yang memudahkan petani dan konsumen dalam proses distribusi produk pertanian dan peternakan, memastikan kualitas yang terbaik untuk dunia yang lebih baik.
        </p>
    </div>

    <div class="mt-4">
        <h2 class="text-xl font-semibold">Misi Kami</h2>
        <ul>
            <li>Menjadi penghubung yang handal antara petani, peternak, dan konsumen.</li>
            <li>Meningkatkan efisiensi dalam distribusi produk pertanian dan peternakan.</li>
            <li>Memberikan layanan yang transparan dan berkualitas tinggi kepada semua pihak yang terlibat.</li>
        </ul>
    </div>

    <div class="mt-4">
        <h2 class="text-xl font-semibold">Sejarah Perusahaan</h2>
        <p>
            Perusahaan kami didirikan pada tahun 2020 dengan tujuan untuk mengoptimalkan rantai pasokan produk pertanian dan peternakan di Indonesia. Kami bekerja sama dengan berbagai petani dan peternak lokal untuk menyediakan produk berkualitas tinggi kepada konsumen.
        </p>
    </div>

    <div class="mt-4">
        <h2 class="text-xl font-semibold">Tim Kami</h2>
        <p>
            Tim kami terdiri dari profesional yang berpengalaman di bidang pertanian, peternakan, dan teknologi informasi, yang bekerja keras untuk memberikan layanan terbaik kepada pelanggan kami.
        </p>
    </div>

    <div class="mt-4">
        <h2 class="text-xl font-semibold">Lokasi Kami</h2>
        <p>
            Kami berlokasi di [alamat perusahaan], dan melayani seluruh wilayah Indonesia melalui platform online kami.
        </p>
    </div>
</div>
@endsection
