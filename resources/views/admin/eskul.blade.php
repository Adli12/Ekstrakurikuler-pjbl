<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Dashboard eskul
    </title>
    <link rel="shortcut icon" href="{{ asset('img/logoicon.png') }}" type="image/x-icon">
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
        @include('partials.admin-sidebar')
        <!-- end sidebar and bottombar -->

        <div class="flex-1 ">
            <!-- Navbar -->
            @include('partials.navbar')
            <!-- end navbar -->

            <!-- main content -->
            <div class="grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6 p-6">
                <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">
                    <h2 class="text-2xl font-bold">
                        Members Management
                    </h2>
                    <div class="flex flex-row items-center space-x-4 w-full md:w-auto">
                        <form action="{{ route('user.absen') }}" method="GET" class="relative w-full md:w-60 mb-4">
                            <input type="text" name="search" value="{{ request('search') }}"
                                placeholder="Search anggota..."
                                class="w-full p-2 pl-10 border rounded-lg bg-gray-100 text-gray-600 shadow-sm focus:outline-none focus:ring-2 focus:ring-black" />
                            <i class="fas fa-search absolute left-3 top-3 text-gray-500"></i>
                        </form>
                    </div>
                </div>
                <div class="overflow-x-auto max-h-[400px] overflow-y-auto">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="text-black">
                                <th class="py-2 px-4 border-b text-sm">NO</th>
                                <th class="py-2 px-4 border-b text-sm">NAME</th>
                                <th class="py-2 px-4 border-b text-sm">CLASS</th>
                                <th class="py-2 px-4 border-b text-sm">EKSTRAKURIKULER</th>
                            </tr>
                        </thead>
                        <tbody class="text-center text-black">
                            @foreach ($anggotas as $index => $anggota)
                                <tr>
                                    <td class="border px-4 py-2">{{ $index + 1 }}</td>
                                    <td class="border px-4 py-2">
                                        {{ $anggota->nama_anggota }}
                                        <input type="hidden" name="absen[{{ $anggota->id_anggota }}][nama_siswa]"
                                            value="{{ $anggota->nama_anggota }}">
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ $anggota->kelas }}
                                        <input type="hidden" name="absen[{{ $anggota->id_anggota }}][kelas]"
                                            value="{{ $anggota->kelas }}">
                                    </td>
                                    <td class="border px-4 py-2">
                                        {{ $eskul->nama_eskul }}
                                        <input type="hidden" name="absen[{{ $anggota->id_anggota }}][kelas]"
                                            value="{{ $eskul->nama_eskul }}">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>
</body>

</html>