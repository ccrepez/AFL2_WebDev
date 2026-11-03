<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Divija | Homemade for you')</title>
    <meta name="description" content="Divija menghadirkan susu kedelai, sari kacang hijau almond, dan jelly milk yang diolah sendiri dari bahan pilihan. Tanpa pengawet, menggunakan gula asli, dan dikemas higienis dalam botol.">
    <link rel="icon" href="{{ asset('images/brand/logo-divija.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;500;600;700;800&family=Caveat:wght@600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')
</body>
</html>
