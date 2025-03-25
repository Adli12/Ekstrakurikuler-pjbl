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
                            Members Management
                        </h2>
                        <div class="flex flex-row items-center space-x-4 w-full md:w-auto">
                            <div class="relative w-full md:w-60 z-0">
                                <input
                                    class="w-full p-2 pl-10 border rounded-lg bg-gray-100 text-gray-600 shadow-sm focus:outline-none focus:ring-2 focus:ring-black"
                                    placeholder="Search" type="text" />
                                <i class="fas fa-search absolute left-3 top-3 text-gray-500">
                                </i>
                            </div>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded w-full md:w-auto" id="openModal">
                                + Add Member
                            </button>
                        </div>
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
                                        MAJOR
                                    </th>
                                    <th class="py-2 px-4 border-b text-sm">
                                        ACTIONS
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td class="py-2 px-4 ">
                                        1
                                    </td>
                                    <td class="py-2 px-4 ">
                                        John Doe
                                    </td>
                                    <td class="py-2 px-4 ">
                                        10
                                    </td>
                                    <td class="py-2 px-4 ">
                                        RPL
                                    </td>

                                    <td class="py-2 px-4 ">
                                        <i class="fas fa-edit text-gray-600 hover:text-gray-800 cursor-pointer mr-2"
                                            id="btnUpdate">
                                        </i>
                                        <i class="fas fa-trash text-gray-600 hover:text-gray-800 cursor-pointer"
                                            id="btnDelete">
                                        </i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- pop up add-->
                    <div id="modal"
                        class="fixed inset-0 bg-black bg-opacity-50 hidden flex justify-center items-center">
                        <div
                            class="bg-white p-6 rounded shadow-lg w-[90%] max-w-3xl transform transition-all duration-300">
                            <h2 class="text-xl font-bold mb-4">Add Member</h2>
                            <!-- Form Tambah Anggota -->
                            <form>
                                <label class="block mb-2">Name</label>
                                <input type="text" class="w-full p-2 border rounded mb-4" placeholder="Enter name">

                                <label class="block mb-2">Class</label>
                                <input type="email" class="w-full p-2 border rounded mb-4" placeholder="Enter class">

                                <label class="block mb-2">Major</label>
                                <input type="email" class="w-full p-2 border rounded mb-4" placeholder="Enter major">

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
                        <div
                            class="bg-white p-6 rounded shadow-lg w-[90%] max-w-3xl transform transition-all duration-300">
                            <h2 class="text-xl font-bold mb-4">Add Member</h2>
                            <!-- Form Tambah Anggota -->
                            <form>
                                <label class="block mb-2">Name</label>
                                <input type="text" class="w-full p-2 border rounded mb-4" placeholder="Enter name">

                                <label class="block mb-2">Class</label>
                                <input type="email" class="w-full p-2 border rounded mb-4" placeholder="Enter class">

                                <label class="block mb-2">Major</label>
                                <input type="email" class="w-full p-2 border rounded mb-4" placeholder="Enter major">

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
                    <!-- delete pop up -->
                    <div id="deleteModal"
                        class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center">
                        <div class="bg-white w-11/12 md:w-1/3 p-6 rounded-lg shadow-lg text-center">
                            <h2 class="text-xl font-bold mb-4">Are you sure?</h2>
                            <p class="text-gray-700 mb-6">Do you really want to delete this member? This process cannot
                                be undone.</p>

                            <div class="flex justify-center">
                                <button class="bg-gray-400 text-white px-4 py-2 rounded mr-2"
                                    onclick="closeDeleteModal()">Cancel</button>
                                <button class="bg-red-500 text-white px-4 py-2 rounded">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{ asset('js/dashboard.js') }}"></script>
            <script src="{{ asset('js/user/anggota.js') }}"></script>
    </body>

    </html>