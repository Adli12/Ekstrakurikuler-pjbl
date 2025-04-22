<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Dashboard gallery
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
                        Achievement Gallery
                    </h2>
                    <div class="flex flex-row items-center space-x-4 w-full md:w-auto">
                        <button class="bg-blue-500 text-white px-4 py-2 rounded w-full md:w-auto" id="openModal">
                            + Add New Image
                        </button>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                    @foreach ($galleries as $gallery)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img src="{{ asset('uploads/img/' . $gallery->foto) }}"
                                class="w-full h-48 object-cover cursor-pointer"
                                onclick="showImageModal('{{ asset('uploads/img/' . $gallery->foto) }}')">
                            <div class="p-4">
                                <h2 class="text-lg font-semibold">{{ $gallery->judul }}</h2>
                                <p class="text-gray-500 text-sm">Added on
                                    {{ \Carbon\Carbon::parse($gallery->tanggal)->format('M d, Y') }}
                                </p>
                                <div class="flex justify-between items-center mt-4 space-x-4">
                                    <!-- Tombol Edit -->
                                    <button
                                        onclick="openEditModal('{{ $gallery->id }}', '{{ $gallery->judul }}', '{{ $gallery->foto }}' , '{{ $gallery->tanggal }}')"
                                        class="text-blue-600 hover:text-blue-800">
                                        <i class="fas fa-edit"></i>
                                    </button>

                                    <!-- Tombol Delete -->
                                    <i class="fas fa-trash text-red-600 cursor-pointer"
                                        onclick="openDeleteModal('{{ route('user.gallery.destroy', $gallery->id) }}')">
                                    </i>

                                    <form id="delete-form-{{ $gallery->id }}"
                                        action="{{ route('user.gallery.destroy', $gallery->id) }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="modal"
                    class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center w-90">
                    <div class="bg-white p-6 rounded shadow-lg w-[90%] max-w-3xl transform transition-all duration-300">
                        <h2 class="text-xl font-bold mb-4">Add Gallery</h2>
                        <!-- Form Tambah gallery -->
                        <form action="{{ route('user.gallery.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <label class="block mb-2">Title</label>
                            <input type="text" name="judul" class="w-full p-2 border rounded mb-4"
                                placeholder="Enter Image Title">

                            <label class="block mb-2">file</label>
                            <input type="file" name="foto" class="w-full p-2 border rounded mb-4"
                                placeholder="Enter file">

                            <label class="block mb-2">Date</label>
                            <input type="date" name="tanggal" class="w-full p-2 border rounded mb-4">

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
                <!-- pop edit -->
                <div id="updateModal"
                    class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
                    <div class="bg-white p-6 rounded shadow-lg w-[90%] max-w-3xl">
                        <h2 class="text-xl font-bold mb-4">Edit Photo</h2>
                        <form method="POST" id="editForm" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <label class="block mb-2">Title</label>
                            <input type="text" id="edit_judul" class="w-full p-2 border rounded mb-4" name="judul"
                                required>

                            <label class="block mb-2">Photo (optional)</label>
                            <input type="file" id="edit_foto" class="w-full p-2 border rounded mb-4" name="foto">

                            <label class="block mb-2">Date</label>
                            <input type="date" id="edit_tanggal" class="w-full p-2 border rounded mb-4" name="tanggal"
                                required>

                            <div class="flex justify-end">
                                <button id="closeEditModal" type="button"
                                    class="bg-red-500 text-white px-4 py-2 rounded mr-2">Close</button>
                                <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- pop delete -->
                <!-- Modal Konfirmasi Delete untuk Gallery -->
                <div id="deleteModal"
                    class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
                    <div class="bg-white w-11/12 md:w-1/3 p-6 rounded-lg shadow-lg text-center">
                        <h2 class="text-xl font-bold mb-4 text-red-600">Delete Gallery</h2>
                        <p class="text-gray-700 mb-6">Are you sure you want to delete this gallery photo? This
                            action
                            cannot be undone.</p>

                        <div class="flex justify-center">
                            <button class="bg-gray-400 text-white px-4 py-2 rounded mr-2"
                                onclick="closeDeleteModal()">Cancel</button>
                            <button class="bg-red-500 text-white px-4 py-2 rounded"
                                onclick="confirmDelete()">Delete</button>
                        </div>

                        <!-- Form delete akan di-set action-nya secara dinamis -->
                        <form id="deleteForm" method="POST" class="hidden">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
                <div id="imageModal"
                    class="fixed inset-0 bg-black bg-opacity-50 hidden justify-center items-center z-50">
                    <div class="bg-white p-4 rounded-lg shadow-lg relative max-w-2xl">
                        <button onclick="closeImageModal()"
                            class="absolute top-2 right-4 text-gray-500 hover:text-red-500 text-4xl leading-none">
                            &times;
                        </button>

                        <img id="modalImage" src="" alt="Preview" class="max-w-full max-h-[80vh] rounded-lg">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="{{ asset('js/user/gallery.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>
</body>

</html>