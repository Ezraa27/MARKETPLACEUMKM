<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('styles/style_ezra.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <h1>Poto Saya</h1>

    <img src="{{ asset('images/ezra1.png') }}" alt="ezra1">
    <img src="{{ asset('images/ezra2.png') }}" alt="ezra2">
    <div class="bg-blue-500 p-4 m-4 rounded-lg text-white">
        Ini pakai Tailwind
    </div>
</body>

</html>