@extends('layouts.app')

@section('title', 'SMK Negeri 1 - Sekolah Kejuruan Terbaik')

@section('content')

<!-- Hero Section -->
<section class="relative bg-black overflow-hidden">
    <!-- Background Image with Overlay -->
    <div class="absolute inset-0">
        <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-black/60 z-10"></div>
        <div class="w-full h-full bg-gradient-to-br from-gray-900 to-black opacity-90"></div>
        <!-- You can add actual school image here -->
        <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    </div>
    
    <div class="relative z-20 mx-auto max-w-7xl px-4 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <!-- Animated Logo -->
            <div class="mb-8 animate-fade-in">
                <div class="inline-flex items-center justify-center w-24 h-24 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full shadow-2xl mb-6 animate-pulse">
                    <span class="text-4xl">🏫</span>
                </div>
            </div>
            
            <!-- Main Heading -->
            <h1 class="text-4xl font-bold tracking-tight text-white sm:text-6xl lg:text-7xl animate-slide-up">
                <span class="block text-yellow-400 mb-2">SMK Negeri 1</span>
                <span class="block text-2xl sm:text-3xl lg:text-4xl font-normal text-gray-300">
                    Membangun Generasi Unggul
                </span>
            </h1>
            
            <!-- Subtitle -->
            <p class="mx-auto mt-6 max-w-2xl text-lg leading-8 text-gray-300 animate-fade-in-delay">
                Sekolah Menengah Kejuruan terdepan yang menghasilkan lulusan kompeten, 
                berkarakter, dan siap menghadapi tantangan dunia industri 4.0
            </p>
            
            <!-- CTA Buttons -->
            <div class="mt-10 flex items-center justify-center gap-x-6 animate-slide-up-delay">
                <a href="{{ route('ppdb.create') }}" 
                   class="hero-btn-primary group">
                    <span>📝 Daftar Sekarang</span>
                    <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="{{ route('about') }}" 
                   class="hero-btn-secondary group">
                    <span>👁️ Selengkapnya</span>
                    <svg class="ml-2 h-5 w-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </a>
            </div>
            
            <!-- Statistics -->
            <div class="mt-16 grid grid-cols-2 gap-8 sm:grid-cols-4 animate-fade-in-delay-2">
                <div class="stat-card">
                    <div class="text-3xl font-bold text-yellow-400">1000+</div>
                    <div class="text-sm text-gray-400">Siswa Aktif</div>
                </div>
                <div class="stat-card">
                    <div class="text-3xl font-bold text-yellow-400">95%</div>
                    <div class="text-sm text-gray-400">Tingkat Kelulusan</div>
                </div>
                <div class="stat-card">
                    <div class="text-3xl font-bold text-yellow-400">80+</div>
                    <div class="text-sm text-gray-400">Tenaga Pendidik</div>
                </div>
                <div class="stat-card">
                    <div class="text-3xl font-bold text-yellow-400">15</div>
                    <div class="text-sm text-gray-400">Program Keahlian</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>
</section>

<!-- Latest News Section -->
@if($latestNews->count() > 0)
<section class="py-16 bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">📰 Berita Terbaru</h2>
            <p class="section-subtitle">Informasi dan update terkini dari sekolah</p>
        </div>
        
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach($latestNews->take(6) as $news)
            <article class="news-card group">
                @if($news->featured_image)
                <div class="aspect-video overflow-hidden rounded-t-2xl">
                    <img src="{{ $news->featured_image }}" 
                         alt="{{ $news->title }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                @endif
                
                <div class="p-6">
                    <div class="flex items-center text-sm text-gray-400 mb-3">
                        <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        {{ $news->published_at->format('d M Y') }}
                    </div>
                    
                    <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-yellow-400 transition-colors">
                        {{ Str::limit($news->title, 60) }}
                    </h3>
                    
                    <p class="text-gray-400 text-sm mb-4">
                        {{ Str::limit(strip_tags($news->content), 100) }}
                    </p>
                    
                    <a href="{{ route('news.show', $news) }}" 
                       class="inline-flex items-center text-yellow-400 hover:text-yellow-300 font-semibold transition-colors">
                        Baca Selengkapnya
                        <svg class="ml-2 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                </div>
            </article>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('news.index') }}" class="btn-outline">
                Lihat Semua Berita
            </a>
        </div>
    </div>
</section>
@endif

<!-- Extracurriculars Section -->
@if($extracurriculars->count() > 0)
<section class="py-16 bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">🏆 Ekstrakurikuler</h2>
            <p class="section-subtitle">Beragam kegiatan untuk mengembangkan bakat dan minat siswa</p>
        </div>
        
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            @foreach($extracurriculars->take(6) as $extracurricular)
            <div class="extracurricular-card group">
                @if($extracurricular->image)
                <div class="aspect-square overflow-hidden rounded-t-2xl">
                    <img src="{{ $extracurricular->image }}" 
                         alt="{{ $extracurricular->name }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                @endif
                
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-yellow-400 transition-colors">
                        {{ $extracurricular->name }}
                    </h3>
                    
                    <p class="text-gray-400 text-sm">
                        {{ Str::limit($extracurricular->description, 100) }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('extracurriculars.index') }}" class="btn-outline">
                Lihat Semua Ekstrakurikuler
            </a>
        </div>
    </div>
</section>
@endif

<!-- Gallery Section -->
@if($recentPhotos->count() > 0)
<section class="py-16 bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="section-title">📸 Galeri Foto</h2>
            <p class="section-subtitle">Momen-momen berharga di SMK Negeri 1</p>
        </div>
        
        <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4" x-data="{ lightbox: false, currentImage: '' }">
            @foreach($recentPhotos->take(8) as $photo)
            <div class="gallery-item group cursor-pointer"
                 @click="lightbox = true; currentImage = '{{ $photo->image_url }}'">
                <div class="aspect-square overflow-hidden rounded-2xl">
                    <img src="{{ $photo->image_url }}" 
                         alt="{{ $photo->title }}"
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                </div>
                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-colors duration-300 rounded-2xl flex items-center justify-center">
                    <svg class="h-8 w-8 text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                    </svg>
                </div>
            </div>
            @endforeach
            
            <!-- Lightbox -->
            <div x-show="lightbox" 
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0"
                 x-transition:enter-end="opacity-100"
                 x-transition:leave="transition ease-in duration-200"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4"
                 @click="lightbox = false"
                 @keydown.escape="lightbox = false">
                <img :src="currentImage" 
                     alt="Gallery Image"
                     class="max-w-full max-h-full object-contain rounded-lg">
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="{{ route('gallery.index') }}" class="btn-outline">
                Lihat Semua Foto
            </a>
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-r from-yellow-400 to-yellow-500">
    <div class="mx-auto max-w-7xl px-4 text-center">
        <h2 class="text-4xl font-bold text-black mb-6">
            🚀 Bergabunglah dengan Kami!
        </h2>
        <p class="text-xl text-black/80 mb-8 max-w-2xl mx-auto">
            Wujudkan impian karir Anda bersama SMK Negeri 1. 
            Daftar sekarang dan raih masa depan yang cerah!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="{{ route('ppdb.create') }}" 
               class="cta-btn-primary group">
                <span>📝 Daftar PPDB 2024</span>
                <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            <a href="{{ route('contact') }}" 
               class="cta-btn-secondary group">
                <span>💬 Hubungi Kami</span>
                <svg class="ml-2 h-5 w-5 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<style>
/* Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slideUp {
    from { opacity: 0; transform: translateY(50px); }
    to { opacity: 1; transform: translateY(0); }
}

.animate-fade-in {
    animation: fadeIn 0.8s ease-out;
}

.animate-slide-up {
    animation: slideUp 0.8s ease-out;
}

.animate-fade-in-delay {
    animation: fadeIn 0.8s ease-out 0.2s both;
}

.animate-slide-up-delay {
    animation: slideUp 0.8s ease-out 0.4s both;
}

.animate-fade-in-delay-2 {
    animation: fadeIn 0.8s ease-out 0.6s both;
}

/* Components */
.hero-btn-primary {
    @apply bg-yellow-400 text-black px-8 py-4 rounded-2xl font-bold text-lg hover:bg-yellow-300 transition-all duration-300 transform hover:scale-105 inline-flex items-center shadow-2xl;
    box-shadow: 0 10px 40px rgba(255, 215, 0, 0.3);
}

.hero-btn-primary:hover {
    box-shadow: 0 20px 60px rgba(255, 215, 0, 0.4);
}

.hero-btn-secondary {
    @apply text-white border-2 border-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-white hover:text-black transition-all duration-300 transform hover:scale-105 inline-flex items-center;
}

.stat-card {
    @apply text-center p-4 rounded-2xl bg-gray-800/50 backdrop-blur-sm border border-gray-700 hover:border-yellow-400 transition-all duration-300 hover:scale-105;
}

.section-title {
    @apply text-4xl font-bold text-white mb-4;
}

.section-subtitle {
    @apply text-xl text-gray-400 max-w-2xl mx-auto;
}

.news-card {
    @apply bg-gray-800 rounded-2xl overflow-hidden hover:bg-gray-700 transition-all duration-300 transform hover:scale-105 border border-gray-700 hover:border-yellow-400;
}

.extracurricular-card {
    @apply bg-gray-800 rounded-2xl overflow-hidden hover:bg-gray-700 transition-all duration-300 transform hover:scale-105 border border-gray-700 hover:border-yellow-400;
}

.gallery-item {
    @apply relative rounded-2xl overflow-hidden;
}

.btn-outline {
    @apply border-2 border-yellow-400 text-yellow-400 px-8 py-3 rounded-2xl font-semibold hover:bg-yellow-400 hover:text-black transition-all duration-300 transform hover:scale-105;
}

.cta-btn-primary {
    @apply bg-black text-white px-8 py-4 rounded-2xl font-bold text-lg hover:bg-gray-800 transition-all duration-300 transform hover:scale-105 inline-flex items-center shadow-2xl;
}

.cta-btn-secondary {
    @apply border-2 border-black text-black px-8 py-4 rounded-2xl font-bold text-lg hover:bg-black hover:text-white transition-all duration-300 transform hover:scale-105 inline-flex items-center;
}
</style>

@endsection