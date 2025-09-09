@extends('layouts.app')

@section('title', 'Berita - SMK Negeri 1')

@section('content')

<!-- Hero Section -->
<section class="relative bg-black overflow-hidden py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-black/60 z-10"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <div class="relative z-20 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold text-white mb-6">
            <span class="text-yellow-400">📰 Berita</span> & Informasi
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Ikuti perkembangan terbaru dan informasi terkini dari SMK Negeri 1. 
            Dapatkan update kegiatan, prestasi, dan pengumuman penting lainnya.
        </p>
    </div>
</section>

<!-- News Grid -->
<section class="py-20 bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        @if($news->count() > 0)
            <!-- Featured News (First Item) -->
            @php $featuredNews = $news->first(); @endphp
            <div class="featured-news-card mb-16">
                <div class="grid lg:grid-cols-2 gap-8 items-center">
                    <div class="order-2 lg:order-1">
                        <div class="flex items-center text-sm text-gray-400 mb-4">
                            <span class="bg-yellow-400 text-black px-3 py-1 rounded-full text-xs font-semibold mr-3">
                                ⭐ UNGGULAN
                            </span>
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            {{ $featuredNews->published_at->format('d M Y') }}
                        </div>
                        
                        <h2 class="text-4xl font-bold text-white mb-4 leading-tight">
                            {{ $featuredNews->title }}
                        </h2>
                        
                        <p class="text-gray-400 text-lg mb-6 leading-relaxed">
                            {{ Str::limit(strip_tags($featuredNews->content), 200) }}
                        </p>
                        
                        <a href="{{ route('news.show', $featuredNews) }}" 
                           class="btn-primary group inline-flex items-center">
                            <span>Baca Selengkapnya</span>
                            <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                    
                    <div class="order-1 lg:order-2">
                        @if($featuredNews->featured_image)
                        <div class="aspect-video overflow-hidden rounded-2xl">
                            <img src="{{ $featuredNews->featured_image }}" 
                                 alt="{{ $featuredNews->title }}"
                                 class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-500">
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            
            <!-- Other News -->
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($news->skip(1) as $newsItem)
                <article class="news-card group">
                    @if($newsItem->featured_image)
                    <div class="aspect-video overflow-hidden rounded-t-2xl">
                        <img src="{{ $newsItem->featured_image }}" 
                             alt="{{ $newsItem->title }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    </div>
                    @endif
                    
                    <div class="p-6">
                        <div class="flex items-center text-sm text-gray-400 mb-3">
                            <svg class="h-4 w-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            {{ $newsItem->published_at->format('d M Y') }}
                        </div>
                        
                        <h3 class="text-xl font-semibold text-white mb-3 group-hover:text-yellow-400 transition-colors leading-tight">
                            {{ Str::limit($newsItem->title, 80) }}
                        </h3>
                        
                        <p class="text-gray-400 text-sm mb-4 leading-relaxed">
                            {{ Str::limit(strip_tags($newsItem->content), 120) }}
                        </p>
                        
                        <a href="{{ route('news.show', $newsItem) }}" 
                           class="inline-flex items-center text-yellow-400 hover:text-yellow-300 font-semibold transition-colors group">
                            Baca Selengkapnya
                            <svg class="ml-2 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                    </div>
                </article>
                @endforeach
            </div>
            
            <!-- Pagination -->
            <div class="mt-16 flex justify-center">
                {{ $news->links('pagination.custom') }}
            </div>
            
        @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-4xl">📰</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Belum Ada Berita</h3>
                <p class="text-gray-400 mb-8">Saat ini belum ada berita yang tersedia. Silakan kembali lagi nanti.</p>
                <a href="{{ route('home') }}" class="btn-outline">
                    Kembali ke Beranda
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="py-20 bg-black">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">
            📧 Berlangganan Newsletter
        </h2>
        <p class="text-gray-400 mb-8">
            Dapatkan update berita dan informasi terbaru langsung ke email Anda
        </p>
        
        <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto" x-data="newsletter()" @submit.prevent="subscribe">
            <input type="email" 
                   x-model="email"
                   placeholder="Masukkan email Anda"
                   class="flex-1 px-4 py-3 bg-gray-800 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20"
                   required>
            <button type="submit" 
                    class="btn-primary whitespace-nowrap"
                    :disabled="loading">
                <span x-show="!loading">Berlangganan</span>
                <span x-show="loading">Loading...</span>
            </button>
        </form>
        
        <div x-show="message" 
             x-transition
             class="mt-4 p-3 rounded-lg"
             :class="success ? 'bg-green-900/50 text-green-400' : 'bg-red-900/50 text-red-400'">
            <span x-text="message"></span>
        </div>
    </div>
</section>

<style>
.featured-news-card {
    @apply bg-gray-800 p-8 rounded-2xl border border-gray-700 hover:border-yellow-400 transition-all duration-300;
}

.news-card {
    @apply bg-gray-800 rounded-2xl overflow-hidden hover:bg-gray-700 transition-all duration-300 transform hover:scale-105 border border-gray-700 hover:border-yellow-400;
}

.btn-primary {
    @apply bg-yellow-400 text-black px-6 py-3 rounded-xl font-semibold hover:bg-yellow-300 transition-all duration-300 transform hover:scale-105;
}

.btn-outline {
    @apply border-2 border-yellow-400 text-yellow-400 px-6 py-3 rounded-xl font-semibold hover:bg-yellow-400 hover:text-black transition-all duration-300 transform hover:scale-105;
}
</style>

<script>
function newsletter() {
    return {
        email: '',
        loading: false,
        message: '',
        success: false,
        
        async subscribe() {
            this.loading = true;
            this.message = '';
            
            try {
                // Simulate API call
                await new Promise(resolve => setTimeout(resolve, 1500));
                
                this.email = '';
                this.message = '✅ Berhasil berlangganan newsletter!';
                this.success = true;
                
                setTimeout(() => {
                    this.message = '';
                }, 5000);
                
            } catch (error) {
                this.message = '❌ Terjadi kesalahan. Silakan coba lagi.';
                this.success = false;
            }
            
            this.loading = false;
        }
    }
}
</script>

@endsection