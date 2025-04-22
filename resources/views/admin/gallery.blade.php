<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Dashboard Gallery
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
                        Achievement Gallery
                    </h2>
                    <div class="flex flex-row items-center space-x-4 w-full md:w-auto">
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
                                <p class="text-gray-500 text-sm">
                                    Added on {{ \Carbon\Carbon::parse($gallery->tanggal)->format('M d, Y') }}
                                </p>
                                @if($gallery->user ?? false)
                                    <p class="text-gray-600 text-sm italic">Uploaded by: {{ $gallery->user->name }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach
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

    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="{{ asset('js/admin/gallery.js') }}"></script>

</body>

</html>
</body>

</html>