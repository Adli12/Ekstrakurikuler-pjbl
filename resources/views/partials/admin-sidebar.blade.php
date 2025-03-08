<div class="hidden md:block sidebar-shrink bg-[#1e3a8a] h-screen shadow-md transition-all duration-300" id="sidebar">
    <div class="pt-7 p-5">
        <h1 class="text-white font-bold mb-10 text-2xl" id="brand-name">EksSkada</h1>
        <ul>
            <li class="mb-4"><a class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a]"
                    href="#"><i class="fas fa-home mr-2"></i><span class="sidebar-text">Dashboard</span></a>
            </li>
            <li class="mb-4"><a class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a]"
                    href="#"><i class="fas fa-users mr-2"></i><span class="sidebar-text">Data Anggota</span></a>
            </li>
            <li class="mb-4"><a class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a]"
                    href="#"><i class="fas fa-images mr-2"></i><span class="sidebar-text">Gallery</span></a>
            </li>
            <li class="mb-4"> <a class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a]"
                    href="#"><i class="fas fa-file-alt mr-2"></i> <span class="sidebar-text">Laporan
                        Kegiatan</span> </a> </li>
            <li class="mb-4">
                <form action="{{ route('logout') }}" method="POST"> @csrf <button
                        class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a] w-full text-left"
                        type="submit"><i class="fas fa-sign-out-alt mr-2"></i> <span
                            class="sidebar-text">Logout</span></button> </form>
            </li>
        </ul>
    </div>
    <div class="absolute bottom-0 p-4">
        <div class="flex items-center"><img alt="User avatar" class="rounded-full mr-2" height="40"
                src="{{ asset('img/auth.jpg') }}" width="40" />
            <div>
                <p class="sidebar-name text-white"> {{ Auth::user()->name }} </p>
                <p class="sidebar-name text-white text-xs uppercase"> {{ Auth::user()->username }} </p>
            </div>
        </div>
    </div>
</div>