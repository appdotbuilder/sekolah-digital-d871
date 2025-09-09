@extends('layouts.app')

@section('title', 'Galeri - SMK Negeri 1')

@section('content')

<!-- Hero Section -->
<section class="relative bg-black overflow-hidden py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-black/60 z-10"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <div class="relative z-20 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold text-white mb-6">
            <span class="text-yellow-400">📸 Galeri</span> Sekolah
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Dokumentasi kegiatan, prestasi, dan momen-momen berharga di SMK Negeri 1. 
            Saksikan perjalanan siswa dalam mengembangkan potensi dan meraih mimpi.
        </p>
    </div>
</section>

<!-- Gallery Filter -->
<section class="py-12 bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="inline-flex rounded-2xl p-1 bg-gray-800 border border-gray-700">
                <button onclick="filterGallery('all')" 
                        class="filter-btn active" 
                        id="filter-all">
                    🌟 Semua
                </button>
                <button onclick="filterGallery('akademik')" 
                        class="filter-btn" 
                        id="filter-akademik">
                    📚 Akademik
                </button>
                <button onclick="filterGallery('ekstrakurikuler')" 
                        class="filter-btn" 
                        id="filter-ekstrakurikuler">
                    🏆 Ekstrakurikuler
                </button>
                <button onclick="filterGallery('fasilitas')" 
                        class="filter-btn" 
                        id="filter-fasilitas">
                    🏢 Fasilitas
                </button>
                <button onclick="filterGallery('prestasi')" 
                        class="filter-btn" 
                        id="filter-prestasi">
                    🥇 Prestasi
                </button>
                <button onclick="filterGallery('acara')" 
                        class="filter-btn" 
                        id="filter-acara">
                    🎉 Acara
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Grid -->
<section class="py-20 bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        @if($galleries->count() > 0)
            <div class="masonry-grid" id="gallery-grid">
                @foreach($galleries as $index => $gallery)
                <div class="gallery-item" 
                     data-category="{{ strtolower($gallery->category ?? 'akademik') }}"
                     onclick="openLightbox({{ $index }})">
                    
                    <div class="gallery-card group">
                        <div class="aspect-square overflow-hidden rounded-2xl relative">
                            <img src="{{ $gallery->image_url ?? 'https://picsum.photos/400/400?random=' . $index }}" 
                                 alt="{{ $gallery->title }}"
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                                 loading="lazy">
                            
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/60 transition-all duration-300 flex items-center justify-center">
                                <div class="transform scale-0 group-hover:scale-100 transition-transform duration-300">
                                    <div class="text-center text-white">
                                        <svg class="h-12 w-12 mx-auto mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                        </svg>
                                        <p class="font-semibold">Lihat Detail</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Category Badge -->
                            <div class="absolute top-3 left-3">
                                <span class="category-badge">
                                    @switch(strtolower($gallery->category ?? 'akademik'))
                                        @case('ekstrakurikuler')
                                            🏆 Ekstrakurikuler
                                            @break
                                        @case('fasilitas')
                                            🏢 Fasilitas
                                            @break
                                        @case('prestasi')
                                            🥇 Prestasi
                                            @break
                                        @case('acara')
                                            🎉 Acara
                                            @break
                                        @default
                                            📚 Akademik
                                    @endswitch
                                </span>
                            </div>
                            
                            <!-- Like Button -->
                            <div class="absolute top-3 right-3">
                                <button class="like-btn" onclick="event.stopPropagation(); toggleLike(this, {{ $gallery->id ?? $index }})">
                                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        
                        <!-- Gallery Info -->
                        <div class="p-4">
                            <h3 class="font-semibold text-white mb-1 group-hover:text-yellow-400 transition-colors">
                                {{ $gallery->title ?? 'Kegiatan Sekolah' }}
                            </h3>
                            <p class="text-sm text-gray-400">
                                {{ $gallery->created_at ? $gallery->created_at->format('d M Y') : now()->subDays(random_int(1, 30))->format('d M Y') }}
                            </p>
                            
                            <!-- Stats -->
                            <div class="flex items-center mt-2 text-xs text-gray-500">
                                <svg class="h-4 w-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                </svg>
                                {{ random_int(50, 200) }} views
                                
                                <svg class="h-4 w-4 ml-3 mr-1" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                                <span class="like-count">{{ random_int(10, 50) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            
            <!-- Load More Button -->
            <div class="text-center mt-12">
                <button class="btn-outline" onclick="loadMoreImages()">
                    📷 Muat Lebih Banyak
                </button>
            </div>
            
            <!-- Pagination -->
            @if($galleries->hasPages())
            <div class="mt-16 flex justify-center">
                {{ $galleries->links('pagination.custom') }}
            </div>
            @endif
            
        @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-4xl">📸</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Belum Ada Foto</h3>
                <p class="text-gray-400 mb-8">Galeri foto sedang dalam proses update.</p>
                <a href="{{ route('home') }}" class="btn-outline">
                    Kembali ke Beranda
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Lightbox Modal -->
<div id="lightboxModal" class="fixed inset-0 z-50 overflow-y-auto hidden bg-black/95">
    <div class="flex min-h-full items-center justify-center p-4">
        <!-- Navigation -->
        <button onclick="previousImage()" class="absolute left-4 top-1/2 transform -translate-y-1/2 z-10 nav-btn">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
            </svg>
        </button>
        
        <button onclick="nextImage()" class="absolute right-4 top-1/2 transform -translate-y-1/2 z-10 nav-btn">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
            </svg>
        </button>
        
        <!-- Close Button -->
        <button onclick="closeLightbox()" class="absolute top-4 right-4 z-10 close-btn">
            <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        
        <!-- Main Content -->
        <div class="lightbox-content max-w-5xl w-full">
            <div class="aspect-video overflow-hidden rounded-2xl mb-4">
                <img id="lightboxImage" 
                     src="" 
                     alt=""
                     class="w-full h-full object-contain">
            </div>
            
            <!-- Image Info -->
            <div class="text-center text-white">
                <h3 id="lightboxTitle" class="text-2xl font-bold mb-2"></h3>
                <p id="lightboxDate" class="text-gray-400 mb-4"></p>
                
                <!-- Action Buttons -->
                <div class="flex justify-center space-x-4">
                    <button onclick="downloadImage()" class="action-btn">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-4-4m4 4l4-4m-6 8h8a2 2 0 002-2V8a2 2 0 00-2-2H10a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                        </svg>
                        Download
                    </button>
                    <button onclick="shareImage()" class="action-btn">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"/>
                        </svg>
                        Bagikan
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.masonry-grid {
    @apply columns-1 sm:columns-2 lg:columns-3 xl:columns-4 gap-6 space-y-6;
}

.gallery-item {
    @apply break-inside-avoid cursor-pointer;
}

.gallery-card {
    @apply bg-gray-800 rounded-2xl overflow-hidden border border-gray-700 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105;
}

.category-badge {
    @apply bg-black/70 text-white px-2 py-1 rounded-full text-xs font-semibold backdrop-blur-sm;
}

.like-btn {
    @apply w-8 h-8 bg-black/70 rounded-full flex items-center justify-center text-white hover:text-red-400 backdrop-blur-sm transition-colors;
}

.like-btn.liked {
    @apply text-red-400;
}

.like-btn.liked svg {
    @apply fill-current;
}

.filter-btn {
    @apply px-6 py-2 text-sm font-medium rounded-xl transition-all duration-200 text-gray-300 hover:text-yellow-400 hover:bg-gray-700;
}

.filter-btn.active {
    @apply bg-yellow-400 text-black shadow-lg;
}

.btn-outline {
    @apply border-2 border-yellow-400 text-yellow-400 px-6 py-3 rounded-xl font-semibold hover:bg-yellow-400 hover:text-black transition-all duration-300 transform hover:scale-105;
}

.nav-btn {
    @apply bg-black/50 text-white p-3 rounded-full hover:bg-black/70 backdrop-blur-sm transition-colors;
}

.close-btn {
    @apply bg-black/50 text-white p-3 rounded-full hover:bg-black/70 backdrop-blur-sm transition-colors;
}

.action-btn {
    @apply bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-300 transition-colors flex items-center;
}
</style>

<script>
let currentImageIndex = 0;
let galleryImages = @json($galleries->map(function($item, $index) {
    return [
        'title' => $item->title ?? 'Kegiatan Sekolah',
        'image' => $item->image_url ?? 'https://picsum.photos/800/600?random=' . $index,
        'date' => $item->created_at ? $item->created_at->format('d M Y') : now()->subDays(random_int(1, 30))->format('d M Y'),
        'category' => strtolower($item->category ?? 'akademik')
    ];
}));

function filterGallery(category) {
    // Update active button
    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
    document.getElementById('filter-' + category).classList.add('active');
    
    // Filter gallery items
    const items = document.querySelectorAll('.gallery-item');
    items.forEach(item => {
        if (category === 'all' || item.dataset.category === category) {
            item.style.display = 'block';
            item.style.opacity = '0';
            setTimeout(() => {
                item.style.opacity = '1';
                item.style.transform = 'scale(1)';
            }, 100);
        } else {
            item.style.opacity = '0';
            item.style.transform = 'scale(0.8)';
            setTimeout(() => {
                item.style.display = 'none';
            }, 300);
        }
    });
}

function openLightbox(index) {
    currentImageIndex = index;
    updateLightboxContent();
    document.getElementById('lightboxModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeLightbox() {
    document.getElementById('lightboxModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function updateLightboxContent() {
    const image = galleryImages[currentImageIndex];
    document.getElementById('lightboxImage').src = image.image;
    document.getElementById('lightboxTitle').textContent = image.title;
    document.getElementById('lightboxDate').textContent = image.date;
}

function nextImage() {
    currentImageIndex = (currentImageIndex + 1) % galleryImages.length;
    updateLightboxContent();
}

function previousImage() {
    currentImageIndex = (currentImageIndex - 1 + galleryImages.length) % galleryImages.length;
    updateLightboxContent();
}

function toggleLike(button, imageId) {
    button.classList.toggle('liked');
    const countElement = button.closest('.gallery-card').querySelector('.like-count');
    const currentCount = parseInt(countElement.textContent);
    
    if (button.classList.contains('liked')) {
        countElement.textContent = currentCount + 1;
    } else {
        countElement.textContent = currentCount - 1;
    }
}

function downloadImage() {
    const image = galleryImages[currentImageIndex];
    const link = document.createElement('a');
    link.href = image.image;
    link.download = image.title + '.jpg';
    link.click();
}

function shareImage() {
    const image = galleryImages[currentImageIndex];
    if (navigator.share) {
        navigator.share({
            title: image.title,
            text: 'Lihat foto kegiatan SMK Negeri 1',
            url: window.location.href
        });
    } else {
        // Fallback: copy to clipboard
        navigator.clipboard.writeText(window.location.href);
        alert('Link telah disalin ke clipboard!');
    }
}

function loadMoreImages() {
    // Simulate loading more images
    alert('Fitur memuat lebih banyak foto akan segera hadir!');
}

// Keyboard navigation
document.addEventListener('keydown', function(e) {
    if (document.getElementById('lightboxModal').classList.contains('hidden')) return;
    
    if (e.key === 'ArrowLeft') previousImage();
    if (e.key === 'ArrowRight') nextImage();
    if (e.key === 'Escape') closeLightbox();
});

// Close lightbox when clicking outside
document.getElementById('lightboxModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeLightbox();
    }
});
</script>

@endsection