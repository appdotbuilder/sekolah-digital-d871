@extends('layouts.app')

@section('title', 'Ekstrakurikuler - SMK Negeri 1')

@section('content')

<!-- Hero Section -->
<section class="relative bg-black overflow-hidden py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-black/60 z-10"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <div class="relative z-20 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold text-white mb-6">
            <span class="text-yellow-400">🏆 Ekstrakurikuler</span> Unggulan
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Kembangkan bakat dan minat Anda melalui berbagai kegiatan ekstrakurikuler yang 
            tersedia. Bergabunglah dan raih prestasi bersama kami!
        </p>
    </div>
</section>

<!-- Categories Filter -->
<section class="py-12 bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="inline-flex rounded-2xl p-1 bg-gray-800 border border-gray-700" x-data="{ activeCategory: 'all' }">
                <button @click="activeCategory = 'all'" 
                        :class="activeCategory === 'all' ? 'filter-btn-active' : 'filter-btn'"
                        class="filter-btn">
                    🌟 Semua
                </button>
                <button @click="activeCategory = 'olahraga'" 
                        :class="activeCategory === 'olahraga' ? 'filter-btn-active' : 'filter-btn'"
                        class="filter-btn">
                    ⚽ Olahraga
                </button>
                <button @click="activeCategory = 'seni'" 
                        :class="activeCategory === 'seni' ? 'filter-btn-active' : 'filter-btn'"
                        class="filter-btn">
                    🎨 Seni & Budaya
                </button>
                <button @click="activeCategory = 'teknologi'" 
                        :class="activeCategory === 'teknologi' ? 'filter-btn-active' : 'filter-btn'"
                        class="filter-btn">
                    💻 Teknologi
                </button>
                <button @click="activeCategory = 'keagamaan'" 
                        :class="activeCategory === 'keagamaan' ? 'filter-btn-active' : 'filter-btn'"
                        class="filter-btn">
                    🕌 Keagamaan
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Extracurriculars Grid -->
<section class="py-20 bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        @if($extracurriculars->count() > 0)
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3" x-data="{ activeCategory: 'all' }">
                @foreach($extracurriculars as $extracurricular)
                <div class="extracurricular-card group" 
                     x-show="activeCategory === 'all' || activeCategory === '{{ strtolower($extracurricular->category ?? 'umum') }}'"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0 transform scale-90"
                     x-transition:enter-end="opacity-100 transform scale-100">
                    
                    @if($extracurricular->image)
                    <div class="aspect-video overflow-hidden rounded-t-2xl relative">
                        <img src="{{ $extracurricular->image }}" 
                             alt="{{ $extracurricular->name }}"
                             class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        
                        <!-- Category Badge -->
                        <div class="absolute top-4 left-4">
                            <span class="category-badge">
                                @switch(strtolower($extracurricular->category ?? 'umum'))
                                    @case('olahraga')
                                        ⚽ Olahraga
                                        @break
                                    @case('seni')
                                        🎨 Seni & Budaya
                                        @break
                                    @case('teknologi')
                                        💻 Teknologi
                                        @break
                                    @case('keagamaan')
                                        🕌 Keagamaan
                                        @break
                                    @default
                                        🌟 Umum
                                @endswitch
                            </span>
                        </div>
                    </div>
                    @endif
                    
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors">
                            {{ $extracurricular->name }}
                        </h3>
                        
                        <p class="text-gray-400 mb-4 leading-relaxed">
                            {{ Str::limit($extracurricular->description, 150) }}
                        </p>
                        
                        <!-- Features -->
                        <div class="space-y-2 mb-6">
                            @php
                                $features = [
                                    'Pelatihan profesional',
                                    'Kompetisi rutin',
                                    'Fasilitas lengkap',
                                    'Sertifikat resmi'
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
                        
                        <!-- Stats -->
                        <div class="grid grid-cols-2 gap-4 mb-6">
                            <div class="stat-mini">
                                <div class="text-lg font-bold text-yellow-400">{{ random_int(20, 50) }}+</div>
                                <div class="text-xs text-gray-400">Anggota</div>
                            </div>
                            <div class="stat-mini">
                                <div class="text-lg font-bold text-yellow-400">{{ random_int(3, 8) }}</div>
                                <div class="text-xs text-gray-400">Prestasi</div>
                            </div>
                        </div>
                        
                        <!-- CTA Button -->
                        <button class="btn-primary w-full group" 
                                @click="$dispatch('open-modal', { 
                                    name: '{{ $extracurricular->name }}',
                                    description: '{{ $extracurricular->description }}',
                                    image: '{{ $extracurricular->image }}'
                                })">
                            <span>📝 Daftar Sekarang</span>
                            <svg class="ml-2 h-4 w-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
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
                    <span class="text-4xl">🏆</span>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4">Belum Ada Ekstrakurikuler</h3>
                <p class="text-gray-400 mb-8">Saat ini belum ada kegiatan ekstrakurikuler yang tersedia.</p>
                <a href="{{ route('home') }}" class="btn-outline">
                    Kembali ke Beranda
                </a>
            </div>
        @endif
    </div>
</section>

<!-- Registration Modal -->
<div x-data="registrationModal()" 
     x-show="isOpen" 
     x-cloak
     @open-modal.window="openModal($event.detail)"
     class="fixed inset-0 z-50 overflow-y-auto">
     
    <!-- Backdrop -->
    <div class="fixed inset-0 bg-black/80 backdrop-blur-sm transition-opacity"
         x-show="isOpen"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="closeModal()"></div>

    <!-- Modal -->
    <div class="flex min-h-full items-center justify-center p-4">
        <div class="modal-content"
             x-show="isOpen"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 transform scale-90"
             x-transition:enter-end="opacity-100 transform scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 transform scale-100"
             x-transition:leave-end="opacity-0 transform scale-90">
            
            <!-- Header -->
            <div class="flex items-center justify-between mb-6">
                <h3 class="text-2xl font-bold text-white">
                    📝 Daftar Ekstrakurikuler
                </h3>
                <button @click="closeModal()" class="modal-close-btn">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            
            <!-- Extracurricular Info -->
            <div class="mb-6 p-4 bg-gray-800 rounded-xl border border-gray-700">
                <h4 class="font-semibold text-yellow-400 mb-2" x-text="selectedExtracurricular.name"></h4>
                <p class="text-gray-400 text-sm" x-text="selectedExtracurricular.description"></p>
            </div>
            
            <!-- Registration Form -->
            <form @submit.prevent="submitRegistration" class="space-y-4">
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label class="form-label">Nama Lengkap *</label>
                        <input type="text" 
                               x-model="form.name"
                               class="form-input"
                               placeholder="Masukkan nama lengkap"
                               required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Kelas *</label>
                        <select x-model="form.class" class="form-input" required>
                            <option value="">Pilih Kelas</option>
                            <option value="X">X (Sepuluh)</option>
                            <option value="XI">XI (Sebelas)</option>
                            <option value="XII">XII (Dua Belas)</option>
                        </select>
                    </div>
                </div>
                
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="form-group">
                        <label class="form-label">Email *</label>
                        <input type="email" 
                               x-model="form.email"
                               class="form-input"
                               placeholder="nama@email.com"
                               required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">No. Telepon *</label>
                        <input type="tel" 
                               x-model="form.phone"
                               class="form-input"
                               placeholder="+62 812-3456-7890"
                               required>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Alasan Bergabung *</label>
                    <textarea x-model="form.reason"
                              rows="4"
                              class="form-input"
                              placeholder="Jelaskan alasan Anda ingin bergabung dengan ekstrakurikuler ini..."
                              required></textarea>
                </div>
                
                <div class="form-group">
                    <label class="flex items-center text-sm text-gray-300">
                        <input type="checkbox" 
                               x-model="form.agreement"
                               class="mr-2 rounded border-gray-600 bg-gray-800 text-yellow-400 focus:ring-yellow-400"
                               required>
                        <span>Saya setuju dengan <a href="#" class="text-yellow-400 hover:underline">syarat dan ketentuan</a> yang berlaku *</span>
                    </label>
                </div>
                
                <div class="flex gap-4 pt-4">
                    <button type="button" 
                            @click="closeModal()"
                            class="btn-secondary flex-1">
                        Batal
                    </button>
                    <button type="submit" 
                            class="btn-primary flex-1"
                            :disabled="loading"
                            :class="{ 'opacity-50': loading }">
                        <span x-show="!loading">Daftar Sekarang</span>
                        <span x-show="loading">Mengirim...</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.filter-btn {
    @apply px-6 py-2 text-sm font-medium rounded-xl transition-all duration-200;
}

.filter-btn-active {
    @apply bg-yellow-400 text-black shadow-lg;
}

.filter-btn:not(.filter-btn-active) {
    @apply text-gray-300 hover:text-yellow-400 hover:bg-gray-700;
}

.extracurricular-card {
    @apply bg-gray-800 rounded-2xl overflow-hidden border border-gray-700 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105;
}

.category-badge {
    @apply bg-black/70 text-white px-3 py-1 rounded-full text-xs font-semibold backdrop-blur-sm;
}

.stat-mini {
    @apply text-center p-3 bg-gray-700 rounded-xl;
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

.modal-content {
    @apply relative bg-gray-900 rounded-2xl p-8 max-w-2xl w-full max-h-[90vh] overflow-y-auto border border-gray-700;
}

.modal-close-btn {
    @apply text-gray-400 hover:text-white p-2 rounded-lg hover:bg-gray-800 transition-colors;
}

.form-group {
    @apply space-y-2;
}

.form-label {
    @apply block text-sm font-medium text-gray-300;
}

.form-input {
    @apply w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition-all duration-300;
}

[x-cloak] {
    display: none !important;
}
</style>

<script>
function registrationModal() {
    return {
        isOpen: false,
        loading: false,
        selectedExtracurricular: {},
        form: {
            name: '',
            class: '',
            email: '',
            phone: '',
            reason: '',
            agreement: false
        },
        
        openModal(data) {
            this.selectedExtracurricular = data;
            this.isOpen = true;
            document.body.style.overflow = 'hidden';
        },
        
        closeModal() {
            this.isOpen = false;
            document.body.style.overflow = 'auto';
            this.resetForm();
        },
        
        resetForm() {
            this.form = {
                name: '',
                class: '',
                email: '',
                phone: '',
                reason: '',
                agreement: false
            };
        },
        
        async submitRegistration() {
            this.loading = true;
            
            try {
                // Simulate API call
                await new Promise(resolve => setTimeout(resolve, 2000));
                
                // Show success message
                alert('🎉 Pendaftaran berhasil! Tim ekstrakurikuler akan menghubungi Anda segera.');
                
                this.closeModal();
                
            } catch (error) {
                alert('❌ Terjadi kesalahan. Silakan coba lagi.');
            }
            
            this.loading = false;
        }
    }
}
</script>

@endsection