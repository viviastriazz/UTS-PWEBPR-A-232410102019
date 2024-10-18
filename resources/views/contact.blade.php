<!-- resources/views/contact.blade.php -->
@extends('layouts.app')

@section('title', 'Contact Page')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Contact Page</h1>
    <table class="table-auto w-full bg-white rounded shadow">
        <thead>
            <tr class="bg-pink-100">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Role</th>
                <th class="px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $people = [
                    ['name' => 'Kemput', 'role' => 'Karyawan', 'email' => 'kemput@example.com'],
                    ['name' => 'Iput', 'role' => 'Karyawan', 'email' => 'iput@example.com'],
                    ['name' => 'Pipi', 'role' => 'Karyawan', 'email' => 'pipi@example.com']
                ];
            @endphp
            @foreach ($people as $person)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $person['name'] }}</td>
                    <td class="px-4 py-2">{{ $person['role'] }}</td>
                    <td class="px-4 py-2">{{ $person['email'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
