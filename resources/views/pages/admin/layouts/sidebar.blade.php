<aside class="sticky top-0 h-screen w-80 shrink-0 overflow-y-auto p-8 bg-blue-600 flex flex-col">
    <div class="group rounded-xl text-white">
        <h1 class="font-semibold text-4xl text-center italic group-hover:scale-110 transition duration-300">MyPorto</h1>
    </div>

    <hr class="my-8 border border-white">

    <div class="flex flex-col justify-between flex-1">
        <div class="flex flex-col gap-15">
            <div class="flex flex-col gap-5">
                <h1 class="text-gray-300 text-sm font-semibold">
                    Dashboard
                </h1>
                <a href="/dashboard" class="group text-white cursor-pointer text-center py-3 border-l-2 border-r-2 border-white rounded-xl transition duration-300 {{ request()->routeIs('dashboard') ? 'bg-blue-700 hover:scale-95' : 'hover:bg-blue-700/20 hover:scale-95' }}">
                    <span class="block transition duration-300 {{ request()->routeIs('dashboard') ? '' : 'group-hover:scale-110' }}">Dashboard</span>
                </a>
            </div>
            <div class="flex flex-col gap-3">
                <h1 class="text-gray-300 text-sm font-semibold">
                    Portofolio
                </h1>
                <a href="/portofolio" class="group text-white cursor-pointer text-center py-3 border-l-2 border-r-2 border-white rounded-xl transition duration-300 {{ request()->routeIs('portofolio.*') ? 'bg-blue-700 hover:scale-95' : 'hover:bg-blue-700/20 hover:scale-95' }}">
                    <span class="block transition duration-300 {{ request()->routeIs('portofolio.*') ? '' : 'group-hover:scale-110' }}">Tabel Portofolio</span>
                </a>
            </div>
        </div>

        <div class="w-full">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-white cursor-pointer py-3 rounded-xl transition duration-300 bg-blue-700 hover:bg-blue -800 hover:scale-95">
                    Logout
                </button>
            </form>
        </div>
    </div>
</aside>