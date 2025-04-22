<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Dashboard
    </title>
    <link rel="shortcut icon" href="{{ asset('img/logoicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
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

                <!-- Main Content -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6 p-6">
                    <div class="bg-white p-4 rounded-lg shadow-md flex justify-center items-center">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold">
                                Total Activities
                            </h3>
                            <p class="text-2xl">
                                24
                            </p>
                        </div>
                        <i class="fas fa-calendar-alt text-3xl text-gray-400">
                        </i>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md flex items-center">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold">
                                Active Members
                            </h3>
                            <p class="text-2xl">
                                156
                            </p>
                        </div>
                        <i class="fas fa-users text-3xl text-gray-400">
                        </i>
                    </div>
                    <div class="bg-white p-4 rounded-lg shadow-md flex items-center">
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold">
                                Achievements
                            </h3>
                            <p class="text-2xl">
                                12
                            </p>
                        </div>
                        <i class="fas fa-trophy text-3xl text-gray-400">
                        </i>
                    </div>
                </div>
                <div class="grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6 p-6">
                    <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">
                        <h2 class="text-2xl font-bold">
                            Leaders Ekstrakurikuler
                        </h2>
                    </div>
                    <div class="bg-white shadow-md rounded-lg p-4 ">
                        <table class="min-w-full bg-white">
                            <thead>
                                <tr class="text-black">
                                    <th class="py-2 px-4 border-b text-sm">
                                        NO
                                    </th>
                                    <th class="py-2 px-4 border-b text-sm">
                                        NAME
                                    </th>
                                    <th class="py-2 px-4 border-b text-sm">
                                        CLASS
                                    </th>
                                    <th class="py-2 px-4 border-b text-sm">
                                        Ekstrakurikuler
                                    </th>
                                    <!-- <th class="py-2 px-4 border-b text-sm">
                                        ACTIONS
                                    </th> -->
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($eskulList as $index => $eskul)
                                    <tr>
                                        <td class="py-2 px-4">
                                            {{ $index + 1 }}
                                        </td>
                                        <td class="py-2 px-4">
                                            {{ $eskul->nama_ketua }}
                                        </td>
                                        <td class="py-2 px-4">
                                            {{ $eskul->kelas }}
                                        </td>
                                        <td class="py-2 px-4">
                                            {{ $eskul->nama_eskul }}
                                        </td>
                                        <!-- <td class="py-2 px-4"> -->
                                        <!-- Tombol Edit -->
                                        <!-- <i class="fas fa-edit text-yellow-500 hover:text-yellow-700 cursor-pointer mr-2"
                                                        onclick="openUpdateModal('{{ $eskul->id_eskul }}', '{{ $eskul->nama_ketua }}', '{{ $eskul->kelas }}')"></i>

                                                </td> -->

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div id="updatemodal"
                            class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
                            <div
                                class="bg-white p-6 rounded shadow-lg w-[90%] max-w-3xl transform transition-all duration-300">
                                <h2 class="text-xl font-bold mb-4">Update Ketua</h2>
                                <!-- Form update Ketua -->
                                <form method="POST" id="updateForm">
                                    @csrf
                                    @method('PUT')

                                    <label class="block mb-2">Nama Ketua</label>
                                    <input type="text" id="updateNamaKetua" class="w-full p-2 border rounded mb-4"
                                        placeholder="Masukkan nama ketua" name="nama_ketua">

                                    <label class="block mb-2">Kelas</label>
                                    <input type="text" id="updateKelasKetua" class="w-full p-2 border rounded mb-4"
                                        placeholder="Masukkan kelas" name="kelas">

                                    <div class="flex justify-end">
                                        <button id="closeModalUpdate" type="button"
                                            class="bg-red-500 text-white px-4 py-2 rounded mr-2">
                                            Close
                                        </button>
                                        <button type="submit" class="bg-yellow-500 text-white px-2 py-1 rounded">
                                            Update
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- delete pop up -->
                        <div id="deleteModal"
                            class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
                            <div class="bg-white w-11/12 md:w-1/3 p-6 rounded-lg shadow-lg text-center">
                                <h2 class="text-xl font-bold mb-4">Are you sure?</h2>
                                <p class="text-gray-700 mb-6">Do you really want to delete this member? This process
                                    cannot
                                    be undone.</p>

                                <div class="flex justify-center">
                                    <button class="bg-gray-400 text-white px-4 py-2 rounded mr-2"
                                        onclick="closeDeleteModal()">Cancel</button>
                                    <button class="bg-red-500 text-white px-4 py-2 rounded"
                                        onclick="confirmDelete()">Delete</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('js/dashboard.js') }}"></script>
    </body>

    </html>
</body>

</html>