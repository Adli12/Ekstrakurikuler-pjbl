<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>
</head>

<body>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'Admin Dashboard')</title>

        <!-- Link CSS -->
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap"
            rel="stylesheet">
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
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Script JS (jika diperlukan) -->
        <script src="{{ asset('js/dashboard.js') }}"></script>
    </body>

    </html>

</body>

</html>