@extends('layouts.app')

@section('title', 'Marketplace')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold">Marketplace</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 mt-4">
        @foreach ($products as $product)
            <div class="bg-white p-4 rounded-lg shadow-lg">
                <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}" class="w-full h-48 object-cover rounded-lg">
                <h2 class="text-xl font-semibold mt-2">{{ $product['name'] }}</h2>
                <p class="text-green-600 mt-2">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
