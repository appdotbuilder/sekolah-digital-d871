@extends('layouts.app')

@section('title', 'Fasilitas - SMK Negeri 1')

@section('content')

<!-- Hero Section -->
<section class="relative bg-black overflow-hidden py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-black/60 z-10"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <div class="relative z-20 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold text-white mb-6">
            <span class="text-yellow-400">🏢 Fasilitas</span> Unggulan
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            SMK Negeri 1 dilengkapi dengan fasilitas modern dan lengkap untuk mendukung 
            kegiatan belajar mengajar yang optimal dan pengembangan potensi siswa.
        </p>
    </div>
</section>

<!-- Facilities Grid -->
<section class="py-20 bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        @if($facilities->count() > 0)
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach($facilities as $facility)
                <div class="facility-card group">
                    @if($facility->image)
                    <div class="aspect-video overflow-hidden rounded-t-2xl relative">
                        <img src="{{ $facility->image }}" 
                             alt="{{ $facility->name }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        
                        <!-- Status Badge -->
                        <div class="absolute top-4 right-4">
                            <span class="status-badge">
                                ✅ Aktif
                            </span>
                        </div>
                    </div>
                    @endif
                    
                    <div class="p-6">
                        <div class="flex items-center mb-3">
                            <div class="facility-icon">
                                @switch(strtolower($facility->category ?? 'umum'))
                                    @case('laboratorium')
                                        🔬
                                        @break
                                    @case('workshop')
                                        🔧
                                        @break
                                    @case('perpustakaan')
                                        📚
                                        @break
                                    @case('olahraga')
                                        🏃
                                        @break
                                    @default
                                        🏢
                                @endswitch
                            </div>
                            <div>
                                <h3 class="text-xl font-bold text-white group-hover:text-yellow-400 transition-colors">
                                    {{ $facility->name }}
                                </h3>
                                <p class="text-sm text-gray-400">
                                    {{ ucfirst($facility->category ?? 'Umum') }}
                                </p>
                            </div>
                        </div>
                        
                        <p class="text-gray-400 mb-4 leading-relaxed">
                            {{ Str::limit($facility->description, 150) }}
                        </p>
                        
                        <!-- Features -->
                        <div class="space-y-2 mb-6">
                            @php
                                $features = [
                                    'Kondisi terawat baik',
                                    'Kapasitas memadai',
                                    'Peralatan modern',
                                    'Akses mudah'
                                ];
                            @endphp
                            @foreach(array_slice($features, 0, 3) as $feature)
                            <div class="flex items-center text-sm text-gray-300">
                                <svg class="h-4 w-4 mr-2 text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                {{ $feature }}
                            </div>
                            @endforeach
                        </div>
                        
                        <!-- Capacity Info -->
                        <div class="bg-gray-800 rounded-xl p-4 mb-4">
                            <div class="flex justify-between items-center">
                                <span class="text-sm text-gray-400">Kapasitas</span>
                                <span class="text-yellow-400 font-semibold">{{ random_int(20, 100) }} orang</span>
                            </div>
                            <div class="flex justify-between items-center mt-2">
                                <span class="text-sm text-gray-400">Status</span>
                                <span class="text-green-400 font-semibold">🟢 Tersedia</span>
                            </div>
                        </div>
                        
                        <!-- Action Button -->
                        <button class="btn-primary w-full group" 
                                onclick="showFacilityDetail('{{ $facility->name }}', '{{ $facility->description }}', '{{ $facility->image }}')">
                            <span>👁️ Lihat Detail</span>
                            <svg class="ml-2 h-4 w-4 transition-transform group-hover:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-gray-800 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-4xl">🏢</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Belum Ada Fasilitas</h3>
                <p class="text-gray-400 mb-8">Informasi fasilitas sedang dalam proses update.</p>
                <a href="{{ route('home') }}" class="btn-outline">
                    Kembali ke Beranda
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Facility Categories -->
<section class="py-20 bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-white mb-4">
                📋 Kategori Fasilitas
            </h2>
            <p class="text-gray-400">
                Berbagai jenis fasilitas yang tersedia di SMK Negeri 1
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="category-card">
                <div class="category-icon bg-blue-600">
                    <span class="text-3xl">🔬</span>
                </div>
                <h3 class="category-title">Laboratorium</h3>
                <p class="category-desc">Lab Komputer, Elektronika, Kimia, dan Fisika dengan peralatan modern</p>
                <div class="category-count">{{ $facilities->where('category', 'laboratorium')->count() ?? 5 }} Ruang</div>
            </div>
            
            <div class="category-card">
                <div class="category-icon bg-orange-600">
                    <span class="text-3xl">🔧</span>
                </div>
                <h3 class="category-title">Workshop</h3>
                <p class="category-desc">Bengkel praktik untuk program keahlian teknik mesin dan sipil</p>
                <div class="category-count">{{ $facilities->where('category', 'workshop')->count() ?? 3 }} Ruang</div>
            </div>
            
            <div class="category-card">
                <div class="category-icon bg-green-600">
                    <span class="text-3xl">📚</span>
                </div>
                <h3 class="category-title">Perpustakaan</h3>
                <p class="category-desc">Perpustakaan digital dengan koleksi buku dan e-book terlengkap</p>
                <div class="category-count">{{ $facilities->where('category', 'perpustakaan')->count() ?? 1 }} Ruang</div>
            </div>
            
            <div class="category-card">
                <div class="category-icon bg-purple-600">
                    <span class="text-3xl">🏃</span>
                </div>
                <h3 class="category-title">Olahraga</h3>
                <p class="category-desc">Lapangan olahraga, gym, dan fasilitas kebugaran lainnya</p>
                <div class="category-count">{{ $facilities->where('category', 'olahraga')->count() ?? 4 }} Area</div>
            </div>
        </div>
    </div>
</section>

<!-- Facility Detail Modal -->
<div id="facilityModal" 
     class="fixed inset-0 z-50 overflow-y-auto hidden bg-black/80 backdrop-blur-sm">
    
    <div class="flex min-h-full items-center justify-center p-4">
        <div class="modal-content bg-gray-900 rounded-2xl p-8 max-w-2xl w-full border border-gray-700">
            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
                <h3 id="modalTitle" class="text-2xl font-bold text-white">
                    Detail Fasilitas
                </h3>
                <button onclick="closeFacilityModal()" class="modal-close-btn">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            
            <!-- Content -->
            <div id="modalImage" class="aspect-video overflow-hidden rounded-xl mb-6">
                <!-- Image will be inserted here -->
            </div>
            
            <div id="modalDescription" class="text-gray-300 mb-6">
                <!-- Description will be inserted here -->
            </div>
            
            <!-- Features -->
            <div class="grid md:grid-cols-2 gap-6 mb-6">
                <div class="feature-list">
                    <h4 class="font-semibold text-yellow-400 mb-3">✨ Keunggulan</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li class="flex items-center"><span class="text-yellow-400 mr-2">•</span> Fasilitas modern dan terawat</li>
                        <li class="flex items-center"><span class="text-yellow-400 mr-2">•</span> Kapasitas memadai</li>
                        <li class="flex items-center"><span class="text-yellow-400 mr-2">•</span> Akses mudah dan aman</li>
                        <li class="flex items-center"><span class="text-yellow-400 mr-2">•</span> Dukungan teknis lengkap</li>
                    </ul>
                </div>
                <div class="facility-info">
                    <h4 class="font-semibold text-yellow-400 mb-3">📋 Informasi</h4>
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between">
                            <span class="text-gray-400">Kapasitas:</span>
                            <span class="text-white">40-60 orang</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">Status:</span>
                            <span class="text-green-400">Aktif</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">Jam Operasional:</span>
                            <span class="text-white">07:00 - 16:00</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-400">Booking:</span>
                            <span class="text-yellow-400">Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Action Button -->
            <div class="text-center">
                <button onclick="closeFacilityModal()" class="btn-secondary">
                    Tutup
                </button>
            </div>
        </div>
    </div>
</div>

<style>
.facility-card {
    @apply bg-gray-800 rounded-2xl overflow-hidden border border-gray-700 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105;
}

.facility-icon {
    @apply text-2xl mr-3;
}

.status-badge {
    @apply bg-green-600/90 text-white px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-sm;
}

.btn-primary {
    @apply bg-yellow-400 text-black px-6 py-3 rounded-xl font-semibold hover:bg-yellow-300 transition-all duration-300 transform hover:scale-105 flex items-center justify-center;
}

.btn-secondary {
    @apply bg-gray-700 text-white px-6 py-3 rounded-xl font-semibold hover:bg-gray-600 transition-all duration-300;
}

.btn-outline {
    @apply border-2 border-yellow-400 text-yellow-400 px-6 py-3 rounded-xl font-semibold hover:bg-yellow-400 hover:text-black transition-all duration-300 transform hover:scale-105;
}

.category-card {
    @apply bg-gray-800 p-6 rounded-2xl text-center border border-gray-700 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105;
}

.category-icon {
    @apply w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4;
}

.category-title {
    @apply text-lg font-bold text-white mb-2;
}

.category-desc {
    @apply text-gray-400 text-sm mb-4;
}

.category-count {
    @apply text-yellow-400 font-semibold;
}

.modal-close-btn {
    @apply text-gray-400 hover:text-white p-2 rounded-lg hover:bg-gray-800 transition-colors;
}
</style>

<script>
function showFacilityDetail(name, description, image) {
    document.getElementById('modalTitle').textContent = name;
    document.getElementById('modalDescription').textContent = description;
    
    const imageContainer = document.getElementById('modalImage');
    if (image) {
        imageContainer.innerHTML = `<img src="${image}" alt="${name}" class="w-full h-full object-cover">`;
    } else {
        imageContainer.innerHTML = `<div class="w-full h-full bg-gray-800 flex items-center justify-center"><span class="text-4xl">🏢</span></div>`;
    }
    
    document.getElementById('facilityModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeFacilityModal() {
    document.getElementById('facilityModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

// Close modal when clicking outside
document.getElementById('facilityModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeFacilityModal();
    }
});
</script>

@endsection