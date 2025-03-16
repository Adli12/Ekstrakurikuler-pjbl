<nav class="flex justify-between items-center mb-6 p-6 rounded shadow bg-white">
    <div class="flex items-center">
        <button class="text-black focus:outline-none max-md:hidden" id="sidebar-toggle">
            <i class="fas fa-bars text-xl"></i>
        </button>
        <h2 class="font-bold ml-4 md:text-2xl text-black">Dashboard</h2>
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