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
            Dashboard user
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

                <!-- main content -->
                <div class="grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6 p-6">

                    <div class="flex flex-col md:flex-row justify-between items-center mb-6 space-y-4 md:space-y-0">
                        <h2 class="text-2xl font-bold">
                            Achievement Gallery
                        </h2>
                        <div class="flex flex-row items-center space-x-4 w-full md:w-auto">
                            <button class="bg-blue-500 text-white px-4 py-2 rounded w-full md:w-auto">
                                + Add New Image
                            </button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <!-- Image Card 1 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img alt="Placeholder image 1" class="w-full h-48 object-cover" height="200"
                                src="https://storage.googleapis.com/a1aa/image/J1wPnaC-OPYSxR39SuCem_XwJ1MBTCDbL2v-lOyLGBA.jpg"
                                width="300" />
                            <div class="p-4">
                                <h2 class="text-lg font-semibold">
                                    Image Title
                                </h2>
                                <p class="text-gray-500 text-sm">
                                    Added on Jan 15, 2025
                                </p>
                                <div class="flex justify-between items-center mt-4">
                                    <i class="fas fa-edit text-gray-600 cursor-pointer">
                                    </i>
                                    <i class="fas fa-trash text-gray-600 cursor-pointer">
                                    </i>
                                </div>
                            </div>
                        </div>
                        <!-- Image Card 2 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img alt="Placeholder image 2" class="w-full h-48 object-cover" height="200"
                                src="https://storage.googleapis.com/a1aa/image/5qng9ztsXv9VjeV9ETXpCs2LGc-7SASuuiygqyiVBuA.jpg"
                                width="300" />
                            <div class="p-4">
                                <h2 class="text-lg font-semibold">
                                    Image Title
                                </h2>
                                <p class="text-gray-500 text-sm">
                                    Added on Jan 16, 2025
                                </p>
                                <div class="flex justify-between items-center mt-4">
                                    <i class="fas fa-edit text-gray-600 cursor-pointer">
                                    </i>
                                    <i class="fas fa-trash text-gray-600 cursor-pointer">
                                    </i>
                                </div>
                            </div>
                        </div>
                        <!-- Image Card 3 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img alt="Placeholder image 3" class="w-full h-48 object-cover" height="200"
                                src="https://storage.googleapis.com/a1aa/image/57QgIh5xKq-yx76vf8lx8Rpp1e67mHXTWu1-aGNu3uY.jpg"
                                width="300" />
                            <div class="p-4">
                                <h2 class="text-lg font-semibold">
                                    Image Title
                                </h2>
                                <p class="text-gray-500 text-sm">
                                    Added on Jan 17, 2025
                                </p>
                                <div class="flex justify-between items-center mt-4">
                                    <i class="fas fa-edit text-gray-600 cursor-pointer">
                                    </i>
                                    <i class="fas fa-trash text-gray-600 cursor-pointer">
                                    </i>
                                </div>
                            </div>
                        </div>
                        <!-- Image Card 4 -->
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <img alt="Placeholder image 4" class="w-full h-48 object-cover" height="200"
                                src="https://storage.googleapis.com/a1aa/image/hr9-ukdHrbHRKoDpva2_DH5Q-pt1BRMipF8x4UnTPWA.jpg"
                                width="300" />
                            <div class="p-4">
                                <h2 class="text-lg font-semibold">
                                    Image Title
                                </h2>
                                <p class="text-gray-500 text-sm">
                                    Added on Jan 18, 2025
                                </p>
                                <div class="flex justify-between items-center mt-4">
                                    <i class="fas fa-edit text-gray-600 cursor-pointer">
                                    </i>
                                    <i class="fas fa-trash text-gray-600 cursor-pointer">
                                    </i>
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