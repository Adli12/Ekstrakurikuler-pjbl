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
                            Attendance Management
                        </h2>
                        <div class="flex flex-row items-center space-x-4 w-full md:w-auto">
                            <div class="relative w-full md:w-60">
                                <input
                                    class="w-full p-2 pl-10 border rounded-lg bg-gray-100 text-gray-600 shadow-sm focus:outline-none focus:ring-2 focus:ring-black"
                                    placeholder="Search" type="text" />
                                <i class="fas fa-search absolute left-3 top-3 text-gray-500">
                                </i>
                            </div>
                            <button class="bg-blue-500 text-white px-4 py-2 rounded w-full md:w-auto">
                                + Add Attendance
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
                            <tbody class="text-center text-black">
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
                                        <i class="fas fa-edit text-gray-600 hover:text-gray-800 cursor-pointer mr-2">
                                        </i>
                                        <i class="fas fa-trash text-gray-600 hover:text-gray-800 cursor-pointer">
                                        </i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 ">
                                        2
                                    </td>
                                    <td class="py-2 px-4 ">
                                        budi
                                    </td>
                                    <td class="py-2 px-4 ">
                                        11
                                    </td>
                                    <td class="py-2 px-4 ">
                                        tkj
                                    </td>
                                    <td class="py-2 px-4 ">
                                        <i class="fas fa-edit text-gray-600 hover:text-gray-800 cursor-pointer mr-2">
                                        </i>
                                        <i class="fas fa-trash text-gray-600 hover:text-gray-800 cursor-pointer">
                                        </i>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="py-2 px-4 ">
                                        3
                                    </td>
                                    <td class="py-2 px-4 ">
                                        john
                                    </td>
                                    <td class="py-2 px-4 ">
                                        12
                                    </td>
                                    <td class="py-2 px-4 ">
                                        tsm
                                    </td>
                                    <td class="py-2 px-4 ">
                                        <i class="fas fa-edit text-gray-600 hover:text-gray-800 cursor-pointer mr-2">
                                        </i>
                                        <i class="fas fa-trash text-gray-600 hover:text-gray-800 cursor-pointer">
                                        </i>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button
                            class="bg-red-500 text-white px-6 py-2 rounded-lg shadow hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-400">
                            Export PDF
                        </button>
                    </div>
                </div>
            </div>

            <script src="{{ asset('js/dashboard.js') }}"></script>
    </body>

    </html>