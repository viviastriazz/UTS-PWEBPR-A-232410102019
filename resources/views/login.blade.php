<!-- resources/views/login.blade.php -->
@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Login</h1>
    <form action="/contact" method="GET" class="bg-white p-6 rounded shadow">
        <div class="mb-4">
            <label for="email" class="block">Email</label>
            <input type="email" id="email" name="email" class="w-full border rounded px-3 py-2">
        </div>
        <div class="mb-4">
            <label for="password" class="block">Password</label>
            <input type="password" id="password" name="password" class="w-full border rounded px-3 py-2">
        </div>
        <button type="submit" class="bg-pink-500 text-white px-4 py-2 rounded">Login</button>
    </form>
@endsection
