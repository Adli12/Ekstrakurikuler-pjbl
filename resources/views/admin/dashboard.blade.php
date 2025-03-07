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
        <!-- Sidebar -->
        <div class="sidebar-shrink bg-[#1e3a8a] h-screen shadow-md transition-all duration-300" id="sidebar">
            <div class="pt-7 p-5">
                <h1 class="text-white font-bold mb-10 text-2xl" id="brand-name">EksSkada</h1>
                <ul>
                    <li class="mb-4"><a
                            class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a]"
                            href="#"><i class="fas fa-home mr-2"></i><span class="sidebar-text">Dashboard</span></a>
                    </li>
                    <li class="mb-4"><a
                            class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a]"
                            href="#"><i class="fas fa-users mr-2"></i><span class="sidebar-text">Data Anggota</span></a>
                    </li>
                    <li class="mb-4"><a
                            class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a]"
                            href="#"><i class="fas fa-images mr-2"></i><span class="sidebar-text">Gallery</span></a>
                    </li>
                    <li class="mb-4">
                        <a class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a]"
                            href="#"><i class="fas fa-file-alt mr-2"></i>
                            <span class="sidebar-text">Laporan Kegiatan</span>
                        </a>
                    </li>
                    <li class="mb-4">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button
                                class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a] w-full text-left"
                                type="submit"><i class="fas fa-sign-out-alt mr-2"></i>
                                <span class="sidebar-text">Logout</span></button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="absolute bottom-0 p-4">
                <div class="flex items-center"><img alt="User avatar" class="rounded-full mr-2" height="40"
                        src="{{ asset('img/auth.jpg') }}" width="40" />
                    <div>
                        <p class="sidebar-name text-white">
                            {{ Auth::user()->name }}
                        </p>
                        <p class="sidebar-name text-white text-xs uppercase">
                            {{ Auth::user()->username }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-1 ">
            <!-- Navbar -->
            <nav class="flex justify-between items-center mb-10 p-6 rounded shadow">
                <div class="flex items-center">
                    <button class="text-black focus:outline-none" id="sidebar-toggle">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                    <h2 class="font-bold ml-4 md:text-2xl">Dashboard Pembina</h2>
                </div>
                <div class="relative">
                    <i class="fas fa-cog text-black cursor-pointer" id="settings-icon"></i>
                    <div class="absolute right-0 mt-2 w-48 bg-white border rounded shadow-lg theme-options hidden"
                        id="theme-options">
                        <ul>
                            <li class="p-2 hover:bg-gray-100 cursor-pointer text-black" id="light-theme">
                                <i class="fas fa-sun mr-2"></i> Light Theme
                            </li>
                            <li class="p-2 hover:bg-gray-100 cursor-pointer text-black" id="dark-theme">
                                <i class="fas fa-moon mr-2"></i> Dark Theme
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Main Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6 p-6">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-gray-700 text-lg">Total Ekstrakurikuler</h3>
                    <p class="text-black text-2xl font-bold">12</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-gray-700 text-lg">Active Users</h3>
                    <p class="text-black text-2xl font-bold">1,234</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-gray-700 text-lg">Total Prestasi</h3>
                    <p class="text-black text-2xl font-bold">456</p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-gray-700 text-lg">Conversion Rate</h3>
                    <p class="text-black text-2xl font-bold">3.6%</p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>