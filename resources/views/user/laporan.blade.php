<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Dashboard Laporan
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="{{ asset('img/logoicon.png') }}" type="image/x-icon">
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

            <!-- main content -->
            <div class="grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6 p-6">
                <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">
                    <h2 class="text-2xl font-bold">
                        Report Management
                    </h2>
                    <div class="flex flex-row items-center space-x-4 w-full md:w-auto">
                        <div class="relative w-full md:w-60">
                            <form action="{{ route('user.laporan') }}" method="GET"
                                class="relative w-full translate-y-2 md:w-60 mb-4">
                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Search laporan..."
                                    class="w-full p-2 pl-10 border rounded-lg bg-gray-100 text-gray-600 shadow-sm focus:outline-none focus:ring-2 focus:ring-black" />
                                <i class="fas fa-search absolute left-3 top-3 text-gray-500"></i>
                            </form>
                        </div>
                        <button class="bg-blue-500 text-white px-4 py-2 rounded w-full md:w-auto" id="openModal">
                            + Send Report
                        </button>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg p-4">
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr class="text-black">
                                <th class="py-2 px-4 border-b">No</th>
                                <th class="py-2 px-4 border-b">File</th>
                                <th class="py-2 px-4 border-b">Date</th>
                                <th class="py-2 px-4 border-b">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-center text-black">
                            @foreach ($laporans as $index => $laporan)
                                <tr>
                                    <td class="py-2 px-4">{{ $index + 1 }}</td>
                                    <td class="py-2 px-4">
                                        <a href="{{ route('user.laporan.download', $laporan->id_laporan) }}" target="_blank"
                                            class="text-black">
                                            {{ $laporan->judul ?? 'download' }}
                                        </a>
                                    </td>
                                    <td class="py-2 px-4">
                                        {{ \Carbon\Carbon::parse($laporan->tanggal_laporan)->format('d M Y') }}
                                    </td>
                                    <td class="py-2 px-4 flex justify-center gap-4">
                                        <!-- Tombol Edit -->
                                        <button class="fas fa-edit text-gray-600 hover:text-gray-800 cursor-pointer mr-2"
                                            onclick="openUpdateModal('{{ $laporan->id_laporan }}', '{{ $laporan->judul }}', '{{ $laporan->tanggal_laporan }}')">
                                        </button>


                                        <!-- Tombol Delete -->
                                        <form action="{{ route('user.laporan.destroy', $laporan->id_laporan) }}"
                                            method="POST" class="inline"
                                            onsubmit="event.preventDefault(); openDeleteModal(this);">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <i
                                                    class="fas fa-trash text-gray-600 hover:text-gray-800 cursor-pointer"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- pop up add-->
                <!-- pop up add (Send Report Modal) -->
                <div id="modal"
                    class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center w-90">
                    <div class="bg-white p-6 rounded shadow-lg w-[90%] max-w-3xl transform transition-all duration-300">
                        <h2 class="text-xl font-bold mb-4">Send Report</h2>

                        <!-- Form kirim laporan -->
                        <form action="{{ route('user.laporan.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <label class="block mb-2">Title</label>
                            <input type="text" name="judul" class="w-full p-2 border rounded mb-4"
                                placeholder="Enter title" required>

                            <label class="block mb-2"> File</label>
                            <input type="file" name="file" class="w-full p-2 border rounded mb-4" required>

                            <label class="block mb-2">Tanggal Laporan</label>
                            <input type="date" name="tanggal_laporan" class="w-full p-2 border rounded mb-4" required>

                            <div class="flex justify-end">
                                <button id="closeModal" type="button"
                                    class="bg-red-500 text-white px-4 py-2 rounded mr-2">
                                    Close
                                </button>
                                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- pop up update -->
                <div id="updatemodal"
                    class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
                    <div class="bg-white p-6 rounded shadow-lg w-[90%] max-w-xl transition-all duration-300">
                        <h2 class="text-xl font-bold mb-4">Update Report</h2>
                        <form method="POST" id="updateForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <label class="block mb-2">Title</label>
                            <input type="text" id="updateJudul" class="w-full p-2 border rounded mb-4"
                                placeholder="Enter title" name="judul">

                            <label class="block mb-2">File</label>
                            <input type="file" name="file" class="w-full p-2 border rounded mb-4">

                            <label class="block mb-2">Tanggal Laporan</label>
                            <input type="date" name="tanggal_laporan" id="UpdateTanggal"
                                class="w-full p-2 border rounded mb-4" required>

                            <div class="flex justify-end">
                                <button id="closeModalUpdate" type="button"
                                    class="bg-red-500 text-white px-4 py-2 rounded mr-2">Close</button>
                                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
                <div class="bg-white w-11/12 md:w-1/3 p-6 rounded-lg shadow-lg text-center">
                    <h2 class="text-xl font-bold mb-4">Are you sure?</h2>
                    <p class="text-gray-700 mb-6">Do you really want to delete this report? This action cannot be
                        undone.</p>

                    <div class="flex justify-center">
                        <button class="bg-gray-400 text-white px-4 py-2 rounded mr-2"
                            onclick="closeDeleteModal()">Cancel</button>
                        <button class="bg-red-500 text-white px-4 py-2 rounded"
                            onclick="confirmDelete()">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/user/laporan.js') }}"></script>
        <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>