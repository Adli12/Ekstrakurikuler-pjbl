<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', '')</title>

    <!-- Link CSS -->
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
        <!-- Sidebar -->
        @include('partials.admin-sidebar')

        <div class="main">
            <!-- Navbar -->
            @include('partials.navbar')

            <!-- Konten utama -->
            <div class="content">

            </div>
        </div>
    </div>

    <!-- Script JS (jika diperlukan) -->
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>