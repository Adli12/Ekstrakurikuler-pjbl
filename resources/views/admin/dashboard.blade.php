<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Dashboard
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 font-sans leading-normal tracking-normal">
    <div class="flex">
        <!-- Sidebar -->
        <div class=" w-64 h-screen shadow-md" style="background: #1e3a8a;">
            <div class="p-4">
                <h1 class="text-xl font-bold mb-4">
                    Brand Name
                </h1>
                <ul>
                    <li class="mb-2">
                        <a class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-200" href="#">
                            <i class="fas fa-tachometer-alt mr-2">
                            </i>
                            Dashboard
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-200" href="#">
                            <i class="fas fa-users mr-2">
                            </i>
                            Data Anggota
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-200" href="#">
                            <i class="fas fa-images mr-2">
                            </i>
                            Gallery
                        </a>
                    </li>
                    <li class="mb-2">
                        <a class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-200" href="#">
                            <i class="fas fa-file-alt mr-2 ">
                            </i>
                            Laporan Kegiatan
                        </a>
                    </li>
                    <li class="mb-2">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button
                                class="flex items-center text-gray-700 p-2 rounded hover:bg-gray-200 w-full text-left"
                                type="submit">
                                <i class="fas fa-sign-out-alt mr-2">
                                </i>
                                <span class="title">
                                    Logout
                                </span>
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
            <div class="absolute bottom-0 p-4">
                <div class="flex items-center">
                    <img alt="User avatar" class="rounded-full mr-2" height="40"
                        src="https://storage.googleapis.com/a1aa/image/sEhf9vB3XDuA6gudJIMrRp7jmgvVctZ4aZawfSwkmcY.jpg"
                        width="40" />
                    <div>
                        <p class="text-gray-700">
                            John Doe
                        </p>
                        <p class="text-gray-500 text-sm">
                            Admin
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold">
                    Dashboard
                </h2>
                <div class="flex items-center">
                    <i class="fas fa-bell text-gray-700 mr-4">
                    </i>
                    <i class="fas fa-cog text-gray-700">
                    </i>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-gray-700 text-lg">
                        Total Revenue
                    </h3>
                    <p class="text-2xl font-bold">
                        $24,560
                    </p>
                    <p class="text-green-500">
                        +12.5% from last month
                    </p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-gray-700 text-lg">
                        Active Users
                    </h3>
                    <p class="text-2xl font-bold">
                        1,234
                    </p>
                    <p class="text-green-500">
                        +3.2% from last week
                    </p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-gray-700 text-lg">
                        New Orders
                    </h3>
                    <p class="text-2xl font-bold">
                        456
                    </p>
                    <p class="text-green-500">
                        +8.7% from yesterday
                    </p>
                </div>
                <div class="bg-white p-4 rounded shadow">
                    <h3 class="text-gray-700 text-lg">
                        Conversion Rate
                    </h3>
                    <p class="text-2xl font-bold">
                        3.6%
                    </p>
                    <p class="text-green-500">
                        +1.2% from last month
                    </p>
                </div>
            </div>
            <div class="bg-white p-4 rounded shadow">
                <h3 class="text-gray-700 text-lg mb-4">
                    Recent Transactions
                </h3>
                <table class="w-full text-left">
                    <thead>
                        <tr>
                            <th class="py-2">
                                TRANSACTION ID
                            </th>
                            <th class="py-2">
                                CUSTOMER
                            </th>
                            <th class="py-2">
                                AMOUNT
                            </th>
                            <th class="py-2">
                                STATUS
                            </th>
                            <th class="py-2">
                                DATE
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-2">
                                #TRX-123456
                            </td>
                            <td class="py-2 flex items-center">
                                <img alt="Customer avatar" class="rounded-full mr-2" height="30"
                                    src="https://storage.googleapis.com/a1aa/image/1IDcUChBDSilBNzOpwxov3U2-ZYe5z-JSmEYnaPQeHI.jpg"
                                    width="30" />
                                Sarah Johnson
                            </td>
                            <td class="py-2">
                                $120.00
                            </td>
                            <td class="py-2">
                                <span class="bg-green-100 text-green-700 py-1 px-3 rounded-full text-xs">
                                    Completed
                                </span>
                            </td>
                            <td class="py-2">
                                Jan 15, 2025
                            </td>
                        </tr>
                        <tr>
                            <td class="py-2">
                                #TRX-123457
                            </td>
                            <td class="py-2 flex items-center">
                                <img alt="Customer avatar" class="rounded-full mr-2" height="30"
                                    src="https://storage.googleapis.com/a1aa/image/1IDcUChBDSilBNzOpwxov3U2-ZYe5z-JSmEYnaPQeHI.jpg"
                                    width="30" />
                                Mike Smith
                            </td>
                            <td class="py-2">
                                $85.50
                            </td>
                            <td class="py-2">
                                <span class="bg-yellow-100 text-yellow-700 py-1 px-3 rounded-full text-xs">
                                    Pending
                                </span>
                            </td>
                            <td class="py-2">
                                Jan 14, 2025
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="mt-6 flex justify-center">
                <div class="bg-gray-800 text-white py-2 px-4 rounded shadow">
                    Double click to start section editing
                </div>
            </div>
        </div>
    </div>
</body>

</html>