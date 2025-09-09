@extends('layouts.app')

@section('title', 'Saran & Masukan - SMK Negeri 1')

@section('content')

<!-- Hero Section -->
<section class="relative bg-black overflow-hidden py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-black/60 z-10"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <div class="relative z-20 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold text-white mb-6">
            <span class="text-yellow-400">💬 Saran</span> & Masukan
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Suara Anda sangat berharga bagi kami. Berikan saran, masukan, atau kritik konstruktif 
            untuk membantu SMK Negeri 1 menjadi lebih baik.
        </p>
    </div>
</section>

<!-- Feedback Form -->
<section class="py-20 bg-gray-900">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Form Section -->
            <div class="form-section">
                <div class="mb-8">
                    <h2 class="text-3xl font-bold text-white mb-4">
                        📝 Kirim Feedback
                    </h2>
                    <p class="text-gray-400">
                        Isi formulir di bawah ini dengan saran atau masukan Anda. 
                        Semua feedback akan ditinjau oleh tim manajemen sekolah.
                    </p>
                </div>

                <form action="{{ route('feedback.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <!-- Feedback Type -->
                    <div class="form-group">
                        <label for="type" class="form-label">Jenis Feedback *</label>
                        <select id="type" 
                                name="type" 
                                class="form-input @error('type') error @enderror"
                                required>
                            <option value="">Pilih jenis feedback</option>
                            <option value="saran" {{ old('type') == 'saran' ? 'selected' : '' }}>💡 Saran</option>
                            <option value="keluhan" {{ old('type') == 'keluhan' ? 'selected' : '' }}>😟 Keluhan</option>
                            <option value="pujian" {{ old('type') == 'pujian' ? 'selected' : '' }}>👏 Pujian</option>
                            <option value="pertanyaan" {{ old('type') == 'pertanyaan' ? 'selected' : '' }}>❓ Pertanyaan</option>
                            <option value="lainnya" {{ old('type') == 'lainnya' ? 'selected' : '' }}>📋 Lainnya</option>
                        </select>
                        @error('type')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <!-- Category -->
                    <div class="form-group">
                        <label for="category" class="form-label">Kategori *</label>
                        <select id="category" 
                                name="category" 
                                class="form-input @error('category') error @enderror"
                                required>
                            <option value="">Pilih kategori</option>
                            <option value="akademik" {{ old('category') == 'akademik' ? 'selected' : '' }}>📚 Akademik</option>
                            <option value="fasilitas" {{ old('category') == 'fasilitas' ? 'selected' : '' }}>🏢 Fasilitas</option>
                            <option value="ekstrakurikuler" {{ old('category') == 'ekstrakurikuler' ? 'selected' : '' }}>🏆 Ekstrakurikuler</option>
                            <option value="administrasi" {{ old('category') == 'administrasi' ? 'selected' : '' }}>📋 Administrasi</option>
                            <option value="website" {{ old('category') == 'website' ? 'selected' : '' }}>💻 Website</option>
                            <option value="lainnya" {{ old('category') == 'lainnya' ? 'selected' : '' }}>📌 Lainnya</option>
                        </select>
                        @error('category')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    
                    <!-- User Info (if not authenticated) -->
                    @guest
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Nama *</label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   class="form-input @error('name') error @enderror"
                                   placeholder="Nama lengkap"
                                   value="{{ old('name') }}"
                                   required>
                            @error('name')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   class="form-input @error('email') error @enderror"
                                   placeholder="nama@email.com"
                                   value="{{ old('email') }}">
                            @error('email')
                                <span class="error-message">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="status" class="form-label">Status *</label>
                        <select id="status" 
                                name="status" 
                                class="form-input @error('status') error @enderror"
                                required>
                            <option value="">Pilih status</option>
                            <option value="siswa" {{ old('status') == 'siswa' ? 'selected' : '' }}>🎓 Siswa</option>
                            <option value="alumni" {{ old('status') == 'alumni' ? 'selected' : '' }}>👨‍🎓 Alumni</option>
                            <option value="orang_tua" {{ old('status') == 'orang_tua' ? 'selected' : '' }}>👨‍👩‍👧‍👦 Orang Tua</option>
                            <option value="masyarakat" {{ old('status') == 'masyarakat' ? 'selected' : '' }}>👥 Masyarakat</option>
                            <option value="industri" {{ old('status') == 'industri' ? 'selected' : '' }}>🏭 Industri/Perusahaan</option>
                        </select>
                        @error('status')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                    </div>
                    @endguest
                    
                    <!-- Message -->
                    <div class="form-group">
                        <label for="message" class="form-label">Pesan/Feedback *</label>
                        <textarea id="message" 
                                  name="message" 
                                  rows="6" 
                                  class="form-input @error('message') error @enderror"
                                  placeholder="Tuliskan saran, masukan, atau feedback Anda secara detail..."
                                  required>{{ old('message') }}</textarea>
                        @error('message')
                            <span class="error-message">{{ $message }}</span>
                        @enderror
                        <div class="text-right mt-1">
                            <span class="text-xs text-gray-500" id="char-count">0/1000 karakter</span>
                        </div>
                    </div>
                    
                    <!-- Rating -->
                    <div class="form-group">
                        <label class="form-label">Rating Kepuasan (Opsional)</label>
                        <div class="rating-stars" data-rating="0">
                            <span class="star" data-value="1">⭐</span>
                            <span class="star" data-value="2">⭐</span>
                            <span class="star" data-value="3">⭐</span>
                            <span class="star" data-value="4">⭐</span>
                            <span class="star" data-value="5">⭐</span>
                        </div>
                        <input type="hidden" name="rating" id="rating" value="{{ old('rating') }}">
                        <p class="text-sm text-gray-400 mt-2">Berikan rating untuk pengalaman Anda dengan SMK Negeri 1</p>
                    </div>
                    
                    <!-- Anonymous Option -->
                    <div class="form-group">
                        <label class="flex items-center text-sm text-gray-300">
                            <input type="checkbox" 
                                   name="anonymous" 
                                   class="mr-2 rounded border-gray-600 bg-gray-800 text-yellow-400 focus:ring-yellow-400"
                                   {{ old('anonymous') ? 'checked' : '' }}>
                            <span>Kirim sebagai anonim (nama tidak akan ditampilkan)</span>
                        </label>
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" 
                            class="btn-primary w-full group">
                        <span>📤 Kirim Feedback</span>
                        <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                        </svg>
                    </button>
                </form>
            </div>
            
            <!-- Info Section -->
            <div class="info-section">
                <!-- Feedback Guidelines -->
                <div class="info-card mb-8">
                    <h3 class="info-title">📋 Panduan Feedback</h3>
                    <ul class="info-list">
                        <li>✅ Berikan feedback yang konstruktif dan spesifik</li>
                        <li>✅ Jelaskan masalah atau saran dengan detail</li>
                        <li>✅ Gunakan bahasa yang sopan dan profesional</li>
                        <li>✅ Sertakan contoh konkret jika memungkinkan</li>
                        <li>✅ Berikan solusi atau alternatif jika ada</li>
                    </ul>
                </div>
                
                <!-- Response Time -->
                <div class="info-card mb-8">
                    <h3 class="info-title">⏰ Waktu Respons</h3>
                    <div class="response-time-grid">
                        <div class="response-item">
                            <div class="response-icon bg-green-600">📧</div>
                            <div>
                                <h4 class="response-title">Konfirmasi</h4>
                                <p class="response-desc">1-2 hari kerja</p>
                            </div>
                        </div>
                        <div class="response-item">
                            <div class="response-icon bg-blue-600">🔍</div>
                            <div>
                                <h4 class="response-title">Review</h4>
                                <p class="response-desc">3-5 hari kerja</p>
                            </div>
                        </div>
                        <div class="response-item">
                            <div class="response-icon bg-purple-600">💬</div>
                            <div>
                                <h4 class="response-title">Respons</h4>
                                <p class="response-desc">7-14 hari kerja</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Contact Alternative -->
                <div class="info-card">
                    <h3 class="info-title">📞 Kontak Alternatif</h3>
                    <p class="text-gray-400 mb-4">Butuh respons lebih cepat? Hubungi kami langsung:</p>
                    <div class="contact-methods">
                        <a href="tel:+6221-1234-5678" class="contact-method">
                            <div class="contact-icon bg-green-600">📞</div>
                            <div>
                                <h4 class="contact-title">Telepon</h4>
                                <p class="contact-desc">(021) 1234-5678</p>
                            </div>
                        </a>
                        <a href="mailto:feedback@smkn1.sch.id" class="contact-method">
                            <div class="contact-icon bg-blue-600">📧</div>
                            <div>
                                <h4 class="contact-title">Email</h4>
                                <p class="contact-desc">feedback@smkn1.sch.id</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.form-section {
    @apply bg-gray-800 p-8 rounded-2xl border border-gray-700;
}

.info-section {
    @apply space-y-8;
}

.info-card {
    @apply bg-gray-800 p-6 rounded-2xl border border-gray-700;
}

.info-title {
    @apply text-lg font-bold text-yellow-400 mb-4;
}

.info-list {
    @apply space-y-2 text-gray-300 text-sm;
}

.response-time-grid {
    @apply space-y-4;
}

.response-item {
    @apply flex items-center space-x-3;
}

.response-icon {
    @apply w-10 h-10 rounded-lg flex items-center justify-center text-white flex-shrink-0;
}

.response-title {
    @apply font-semibold text-white text-sm;
}

.response-desc {
    @apply text-xs text-gray-400;
}

.contact-methods {
    @apply space-y-3;
}

.contact-method {
    @apply flex items-center space-x-3 p-3 bg-gray-700 rounded-lg hover:bg-gray-600 transition-colors;
}

.contact-icon {
    @apply w-10 h-10 rounded-lg flex items-center justify-center text-white flex-shrink-0;
}

.contact-title {
    @apply font-semibold text-white text-sm;
}

.contact-desc {
    @apply text-xs text-gray-400;
}

.form-group {
    @apply space-y-2;
}

.form-label {
    @apply block text-sm font-medium text-gray-300;
}

.form-input {
    @apply w-full px-4 py-3 bg-gray-700 border border-gray-600 rounded-xl text-white placeholder-gray-400 focus:outline-none focus:border-yellow-400 focus:ring-2 focus:ring-yellow-400/20 transition-all duration-300;
}

.form-input.error {
    @apply border-red-500 focus:border-red-500 focus:ring-red-500/20;
}

.error-message {
    @apply text-red-400 text-sm mt-1;
}

.rating-stars {
    @apply flex space-x-1 mb-2;
}

.star {
    @apply text-2xl cursor-pointer transition-all duration-200 opacity-30 hover:opacity-100;
}

.star.active {
    @apply opacity-100;
}

.btn-primary {
    @apply bg-yellow-400 text-black px-8 py-4 rounded-xl font-semibold hover:bg-yellow-300 transition-all duration-300 transform hover:scale-105 flex items-center justify-center;
}
</style>

<script>
// Character counter
const messageTextarea = document.getElementById('message');
const charCount = document.getElementById('char-count');

messageTextarea.addEventListener('input', function() {
    const length = this.value.length;
    charCount.textContent = `${length}/1000 karakter`;
    
    if (length > 1000) {
        charCount.classList.add('text-red-400');
    } else {
        charCount.classList.remove('text-red-400');
    }
});

// Rating stars
const ratingContainer = document.querySelector('.rating-stars');
const ratingInput = document.getElementById('rating');
const stars = document.querySelectorAll('.star');

stars.forEach((star, index) => {
    star.addEventListener('click', () => {
        const rating = index + 1;
        ratingInput.value = rating;
        ratingContainer.dataset.rating = rating;
        
        stars.forEach((s, i) => {
            if (i < rating) {
                s.classList.add('active');
            } else {
                s.classList.remove('active');
            }
        });
    });
    
    star.addEventListener('mouseover', () => {
        const hoverRating = index + 1;
        stars.forEach((s, i) => {
            if (i < hoverRating) {
                s.style.opacity = '1';
            } else {
                s.style.opacity = '0.3';
            }
        });
    });
});

ratingContainer.addEventListener('mouseleave', () => {
    const currentRating = parseInt(ratingContainer.dataset.rating);
    stars.forEach((s, i) => {
        if (i < currentRating) {
            s.style.opacity = '1';
        } else {
            s.style.opacity = '0.3';
        }
    });
});
</script>

@endsection