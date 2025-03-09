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
        <!-- Sidebar and bottombar -->
        @include('partials.admin-sidebar')

        <div class="flex-1 ">
            <!-- Navbar -->
            @include('partials.navbar')

            <!-- Main Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6 p-6">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-black text-lg">Total Ekstrakurikuler</h3>
                    <p class="text-black text-2xl font-bold">12</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-black text-lg">Active Users</h3>
                    <p class="text-black text-2xl font-bold">1,234</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-black text-lg">Total Prestasi</h3>
                    <p class="text-black text-2xl font-bold">456</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-black text-lg">Conversion Rate</h3>
                    <p class="text-black text-2xl font-bold">3.6%</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>