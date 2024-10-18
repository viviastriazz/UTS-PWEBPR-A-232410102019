<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #ffe4e6; /* Warna pink muda */
            color: #db2777; /* Warna pink lebih gelap */
        }
    </style>
</head>
<body class="font-sans">
    <div class="container mx-auto">
        @include('partials.header') <!-- Menyertakan file header -->
        @yield('content') <!-- Bagian konten halaman -->
    </div>
</body>
</html>
