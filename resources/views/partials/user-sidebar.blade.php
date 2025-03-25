<div class="fixed sidebar-shrink md:translate-x-0 left-0 top-0 w-64 bg-[#1e3a8a] h-screen shadow-lg transform transition-all duration-300 z-10 md:relative md:w-60"
    id="sidebar">
    <button class="absolute top-4 right-4 text-white text-xl block md:hidden" id="sidebar-toggle-sidebar">
        <i class="fas fa-bars"></i>
    </button>
    <div class="pt-7 p-5" id="sidebar-content">
        <h1 class="text-white font-bold mb-10 text-2xl" id="brand-name">EksSkada</h1>
        <ul>
            <li class="mb-4"><a href="{{ route('user.dashboard') }}"
                    class="flex items-center text-white p-1 rounded hover:bg-white hover:text-[#1e3a8a]" href="#"><i
                        class="fas fa-home mr-2"></i><span class="sidebar-text ">Dashboard</span></a>
            </li>
            <li class="mb-4">
                <a href="{{ route('user.anggota') }}"
                    class="flex items-center text-white p-1 rounded hover:bg-white hover:text-[#1e3a8a]" href="#"><i
                        class="fas fa-users mr-2"></i>
                    <span class="sidebar-text">Data Anggota</span></a>
            </li>
            <li class="mb-4"><a href="{{ route('user.absen') }}"
                    class="flex items-center text-white p-1 rounded hover:bg-white hover:text-[#1e3a8a]" href="#"><i
                        class="fas fa-user mr-2"></i><span class="sidebar-text">Absen Anggota</span></a>
            </li>
            <li class="mb-4"><a href="{{ route('user.gallery') }}"
                    class="flex items-center text-white p-1 rounded hover:bg-white hover:text-[#1e3a8a]" href="#"><i
                        class="fas fa-images mr-2"></i><span class="sidebar-text">Gallery</span></a>
            </li>
            <li class="mb-4"> <a href="{{ route('user.laporan') }}"
                    class="flex items-center text-white p-1 rounded hover:bg-white hover:text-[#1e3a8a]" href="#"><i
                        class="fas fa-file-alt mr-2"></i> <span class="sidebar-text">Laporan
                        Kegiatan</span> </a> </li>
            <li class="mb-4">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button
                        class="flex items-center text-white p-1 rounded hover:bg-white hover:text-[#1e3a8a] w-full text-left"
                        type="submit"><i class="fas fa-sign-out-alt mr-2"></i>
                        <span class="sidebar-text">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
    <div class="absolute bottom-0 p-4">
        <div class="flex items-center"><img alt="User avatar" class="rounded-full mr-2" height="40"
                src="{{ asset('img/auth.jpg') }}" width="40" />
            <div>
                <p class="sidebar-text text-white"> {{ Auth::user()->name }} </p>
                <p class="sidebar-text text-white text-xs uppercase"> {{ Auth::user()->username }} </p>
            </div>
        </div>
    </div>
</div>