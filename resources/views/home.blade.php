@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="relative bg-green-600 text-white">
    <img src="{{ asset('images/farm.jpg') }}" alt="Farm" class="w-full h-80 object-cover">
    <div class="absolute top-1/2 left-1/4 transform -translate-y-1/2">
        <h1 class="text-4xl font-bold">Dari Ladang dan Kandang,<br>Untuk Dunia yang Lebih Baik</h1>
    </div>
</section>
@endsection
