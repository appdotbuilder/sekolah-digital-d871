<!-- Navigation Bar -->
<nav class="bg-black border-b border-gray-800" x-data="{ open: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2 group">
                        <div class="h-8 w-8 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-lg flex items-center justify-center group-hover:shadow-lg group-hover:shadow-yellow-400/50 transition-all duration-300">
                            <span class="text-black font-bold text-lg">🏫</span>
                        </div>
                        <span class="text-yellow-400 font-bold text-xl group-hover:text-yellow-300 transition-colors">
                            SMK Negeri 1
                        </span>
                    </a>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:block">
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="{{ route('home') }}" 
                       class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        Beranda
                    </a>
                    <a href="{{ route('about') }}" 
                       class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                        Tentang
                    </a>
                    <a href="{{ route('news.index') }}" 
                       class="nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}">
                        Berita
                    </a>
                    <a href="{{ route('extracurriculars.index') }}" 
                       class="nav-link {{ request()->routeIs('extracurriculars.*') ? 'active' : '' }}">
                        Ekstrakurikuler
                    </a>
                    <a href="{{ route('facilities.index') }}" 
                       class="nav-link {{ request()->routeIs('facilities.*') ? 'active' : '' }}">
                        Fasilitas
                    </a>
                    <a href="{{ route('gallery.index') }}" 
                       class="nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
                        Galeri
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                        Kontak
                    </a>
                </div>
            </div>

            <!-- Auth Links -->
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6 space-x-4">
                    @auth
                        <a href="{{ route('dashboard') }}" 
                           class="btn-secondary">
                            Dashboard
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="btn-secondary">
                                Logout
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="btn-secondary">
                            Login
                        </a>
                        <a href="{{ route('register') }}" class="btn-primary">
                            Daftar
                        </a>
                    @endauth
                </div>
            </div>

            <!-- Mobile menu button -->
            <div class="md:hidden">
                <button @click="open = !open" 
                        class="relative inline-flex items-center justify-center rounded-md bg-black p-2 text-gray-400 hover:bg-gray-800 hover:text-yellow-400 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 focus:ring-offset-black transition-all duration-200">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg :class="{'hidden': open, 'block': !open }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg :class="{'block': open, 'hidden': !open }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 scale-95"
         x-transition:enter-end="opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 scale-100"
         x-transition:leave-end="opacity-0 scale-95"
         class="md:hidden bg-black border-t border-gray-800">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <a href="{{ route('home') }}" 
               class="mobile-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                Beranda
            </a>
            <a href="{{ route('about') }}" 
               class="mobile-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                Tentang
            </a>
            <a href="{{ route('news.index') }}" 
               class="mobile-nav-link {{ request()->routeIs('news.*') ? 'active' : '' }}">
                Berita
            </a>
            <a href="{{ route('extracurriculars.index') }}" 
               class="mobile-nav-link {{ request()->routeIs('extracurriculars.*') ? 'active' : '' }}">
                Ekstrakurikuler
            </a>
            <a href="{{ route('facilities.index') }}" 
               class="mobile-nav-link {{ request()->routeIs('facilities.*') ? 'active' : '' }}">
                Fasilitas
            </a>
            <a href="{{ route('gallery.index') }}" 
               class="mobile-nav-link {{ request()->routeIs('gallery.*') ? 'active' : '' }}">
                Galeri
            </a>
            <a href="{{ route('contact') }}" 
               class="mobile-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                Kontak
            </a>
            
            <!-- Mobile Auth Links -->
            <div class="border-t border-gray-800 pt-4 mt-4">
                @auth
                    <a href="{{ route('dashboard') }}" 
                       class="mobile-nav-link">
                        Dashboard
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="mobile-nav-link w-full text-left">
                            Logout
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="mobile-nav-link">
                        Login
                    </a>
                    <a href="{{ route('register') }}" class="mobile-nav-link text-yellow-400">
                        Daftar
                    </a>
                @endauth
            </div>
        </div>
    </div>
</nav>

<style>
.nav-link {
    @apply px-3 py-2 rounded-md text-sm font-medium text-gray-300 hover:bg-gray-800 hover:text-yellow-400 transition-all duration-200 relative overflow-hidden;
}

.nav-link.active {
    @apply text-yellow-400 bg-gray-800;
}

.nav-link:hover {
    @apply shadow-lg;
    box-shadow: 0 0 20px rgba(255, 215, 0, 0.3);
}

.mobile-nav-link {
    @apply block px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:bg-gray-800 hover:text-yellow-400 transition-all duration-200;
}

.mobile-nav-link.active {
    @apply text-yellow-400 bg-gray-800;
}

.btn-primary {
    @apply bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-300 transition-all duration-300 hover:scale-105 hover:shadow-lg;
    box-shadow: 0 0 0 0 rgba(255, 215, 0, 0.4);
}

.btn-primary:hover {
    box-shadow: 0 0 20px rgba(255, 215, 0, 0.6);
}

.btn-secondary {
    @apply text-gray-300 hover:text-yellow-400 px-4 py-2 rounded-lg font-semibold border border-gray-600 hover:border-yellow-400 transition-all duration-300 hover:shadow-lg;
}

.btn-secondary:hover {
    box-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
}
</style>