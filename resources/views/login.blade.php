@extends('layouts.app')

@section('title', 'Login')

@section('content')
<section class="flex items-center justify-center h-screen bg-green-600">
    <div class="bg-white p-8 rounded shadow-md w-96">
        <h2 class="text-2xl font-bold text-center mb-4">Login</h2>
        <form>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium">Email</label>
                <input type="email" id="email" class="w-full border-gray-300 rounded focus:ring-green-500 focus:border-green-500">
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium">Password</label>
                <input type="password" id="password" class="w-full border-gray-300 rounded focus:ring-green-500 focus:border-green-500">
            </div>
            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded shadow hover:bg-green-700">Login</button>
        </form>
    </div>
</section>
@endsection
