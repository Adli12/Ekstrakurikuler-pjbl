<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <title>
            Dashboard admin
        </title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <!-- fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
            rel="stylesheet">
    </head>

    <body class="bg-white font-poppins leading-normal tracking-normal">
        <div class="flex">
            <!-- Sidebar and bottombar-->
            @include('partials.user-sidebar')
            <!-- end sidebar and bottombar -->

            <div class="flex-1 ">
                <!-- Navbar -->
                @include('partials.navbar')
                <!-- end navbar -->
            </div>
        </div>

        <script src="{{ asset('js/dashboard.js') }}"></script>
    </body>

    </html>
</body>

</html>