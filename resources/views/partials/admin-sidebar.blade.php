<div class="fixed sidebar-shrink left-0 top-0 w-64 bg-[#1e3a8a] h-screen shadow-lg transform transition-all duration-300 md:translate-x-0 md:relative md:w-60 z-10"
    id="sidebar">
    <button class="absolute top-4 right-4 text-white text-xl block md:hidden" id="sidebar-toggle-sidebar">
        <i class="fas fa-bars"></i>
    </button>
    <div class="pt-7 p-5">
        <h1 class="text-white font-bold mb-10 text-2xl" id="brand-name">EksSkada</h1>
        <ul>
            <li class="mb-4"><a href="{{ route('admin.dashboard') }}"
                    class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a]" href="#"><i
                        class="fas fa-home mr-2"></i><span class="sidebar-text">Dashboard</span></a>
            </li>
            <li class="mb-4">
                <button onclick="toggleDropdown('eskulDropdown')"
                    class="flex justify-between items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a] w-full">
                    <div class="flex items-center">
                        <i class="fas fa-archive mr-2"></i>
                        <span class="sidebar-text">Ekstrakurikuler</span>
                    </div>
                    <i class="fas fa-chevron-down transition-transform duration-300" id="eskulIcon"></i>
                </button>
                <ul id="eskulDropdown" class="hidden pl-3 transition-all duration-300 ease-in-out overflow-hidden mt-1">
                    @foreach($eskuls as $eskul)
                        <li class="mb-2">
                            <i class="far fa-circle text-white"></i>
                            <a href="{{ route('admin.eskul', $eskul->id_eskul) }}" class="text-white">
                                <span class="sidebar-text">{{ $eskul->nama_eskul }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li class="mb-4"><a href="{{ route('admin.gallery') }}"
                    class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a]" href="#"><i
                        class="fas fa-images mr-2"></i><span class="sidebar-text">Gallery</span></a>
            </li>
            <li class="mb-4"> <a href="{{ route('admin.laporan') }}"
                    class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a]" href="#"><i
                        class="fas fa-file-alt mr-2"></i> <span class="sidebar-text">Laporan
                        Kegiatan</span> </a> </li>
            <li class="mb-4">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button
                        class="flex items-center text-white p-2 rounded hover:bg-white hover:text-[#1e3a8a] w-full text-left"
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
                <p class="sidebar-name text-white"> {{ Auth::user()->name }} </p>
                <p class="sidebar-name text-white text-xs uppercase"> {{ Auth::user()->username }} </p>
            </div>
        </div>
    </div>
</div>