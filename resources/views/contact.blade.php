@extends('layouts.app')

@section('title', 'Kontak - SMK Negeri 1')

@section('content')

<!-- Hero Section -->
<section class="relative bg-black overflow-hidden py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-black/60 z-10"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <div class="relative z-20 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold text-white mb-6">
            <span class="text-yellow-400">📞 Hubungi</span> Kami
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Kami siap membantu Anda. Hubungi kami untuk informasi pendaftaran, 
            konsultasi, atau pertanyaan lainnya
        </p>
    </div>
</section>

<!-- Contact Information -->
<section class="py-20 bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-3 gap-8">
            <!-- Contact Info Cards -->
            <div class="contact-card group">
                <div class="contact-icon bg-blue-600 group-hover:bg-blue-500">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">📍 Alamat</h3>
                <p class="text-gray-400 leading-relaxed">
                    Jl. Pendidikan No. 123<br>
                    Kelurahan Maju Jaya<br>
                    Jakarta Selatan 12345<br>
                    DKI Jakarta, Indonesia
                </p>
            </div>
            
            <div class="contact-card group">
                <div class="contact-icon bg-green-600 group-hover:bg-green-500">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">📞 Telepon</h3>
                <p class="text-gray-400 leading-relaxed">
                    Telepon: (021) 1234-5678<br>
                    Fax: (021) 1234-5679<br>
                    WhatsApp: +62 812-3456-7890<br>
                    Hotline PPDB: (021) 1234-5680
                </p>
            </div>
            
            <div class="contact-card group">
                <div class="contact-icon bg-red-600 group-hover:bg-red-500">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">📧 Email</h3>
                <p class="text-gray-400 leading-relaxed">
                    Email Umum: info@smkn1.sch.id<br>
                    PPDB: ppdb@smkn1.sch.id<br>
                    Akademik: akademik@smkn1.sch.id<br>
                    Kesiswaan: kesiswaan@smkn1.sch.id
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form & Map -->
<section class="py-20 bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="contact-form-section">
                <h2 class="text-3xl font-bold text-white mb-6">
                    ✉️ Kirim Pesan
                </h2>
                <p class="text-gray-400 mb-8">
                    Ada pertanyaan atau butuh informasi lebih lanjut? 
                    Kirimkan pesan kepada kami dan tim akan merespons segera.
                </p>
                
                <form class="space-y-6" x-data="contactForm()" @submit.prevent="submitForm">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="form-group">
                            <label for="name" class="form-label">Nama Lengkap *</label>
                            <input type="text" 
                                   id="name" 
                                   name="name" 
                                   x-model="form.name"
                                   class="form-input"
                                   placeholder="Masukkan nama lengkap"
                                   required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" 
                                   id="email" 
                                   name="email" 
                                   x-model="form.email"
                                   class="form-input"
                                   placeholder="nama@email.com"
                                   required>
                        </div>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="form-group">
                            <label for="phone" class="form-label">Nomor Telepon</label>
                            <input type="tel" 
                                   id="phone" 
                                   name="phone" 
                                   x-model="form.phone"
                                   class="form-input"
                                   placeholder="+62 812-3456-7890">
                        </div>
                        
                        <div class="form-group">
                            <label for="subject" class="form-label">Subjek *</label>
                            <select id="subject" 
                                    name="subject" 
                                    x-model="form.subject"
                                    class="form-input"
                                    required>
                                <option value="">Pilih Subjek</option>
                                <option value="ppdb">Informasi PPDB</option>
                                <option value="akademik">Kurikulum & Akademik</option>
                                <option value="fasilitas">Fasilitas Sekolah</option>
                                <option value="kesiswaan">Kegiatan Kesiswaan</option>
                                <option value="lainnya">Lainnya</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Pesan *</label>
                        <textarea id="message" 
                                  name="message" 
                                  rows="6" 
                                  x-model="form.message"
                                  class="form-input"
                                  placeholder="Tuliskan pesan atau pertanyaan Anda..."
                                  required></textarea>
                    </div>
                    
                    <button type="submit" 
                            class="btn-primary w-full group"
                            :disabled="loading"
                            :class="{ 'opacity-50 cursor-not-allowed': loading }">
                        <span x-show="!loading" class="flex items-center justify-center">
                            <span>📤 Kirim Pesan</span>
                            <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/>
                            </svg>
                        </span>
                        <span x-show="loading" class="flex items-center justify-center">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-black" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Mengirim...
                        </span>
                    </button>
                    
                    <!-- Success/Error Messages -->
                    <div x-show="message" 
                         x-transition:enter="transition ease-out duration-300"
                         x-transition:enter-start="opacity-0 transform translate-y-2"
                         x-transition:enter-end="opacity-100 transform translate-y-0"
                         class="message-alert"
                         :class="messageType === 'success' ? 'message-success' : 'message-error'">
                        <span x-text="message"></span>
                    </div>
                </form>
            </div>
            
            <!-- Map & Additional Info -->
            <div class="map-section">
                <h2 class="text-3xl font-bold text-white mb-6">
                    🗺️ Lokasi Sekolah
                </h2>
                
                <!-- Google Maps Embed -->
                <div class="map-container mb-8">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613507864!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5390917b759%3A0x6b45e67356080477!2sBundle%20Indonesia!5e0!3m2!1sen!2sid!4v1634123456789!5m2!1sen!2sid" 
                            width="100%" 
                            height="300" 
                            style="border:0; border-radius: 16px;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                
                <!-- Quick Info -->
                <div class="quick-info-grid">
                    <div class="quick-info-item">
                        <div class="quick-info-icon bg-yellow-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Jam Operasional</h4>
                            <p class="text-sm text-gray-400">Senin - Jumat: 07:00 - 16:00</p>
                            <p class="text-sm text-gray-400">Sabtu: 07:00 - 12:00</p>
                        </div>
                    </div>
                    
                    <div class="quick-info-item">
                        <div class="quick-info-icon bg-yellow-400">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">PPDB 2024</h4>
                            <p class="text-sm text-gray-400">Pendaftaran: Maret - Mei</p>
                            <p class="text-sm text-gray-400">Seleksi: Juni 2024</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="mt-8">
                    <h3 class="text-lg font-semibold text-white mb-4">🌐 Media Sosial</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="social-btn bg-blue-600 hover:bg-blue-500">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-btn bg-pink-600 hover:bg-pink-500">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-btn bg-blue-800 hover:bg-blue-700">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-btn bg-green-600 hover:bg-green-500">
                            <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.contact-card {
    @apply bg-gray-800 p-6 rounded-2xl text-center border border-gray-700 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105;
}

.contact-icon {
    @apply w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 text-white transition-all duration-300;
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

.btn-primary {
    @apply bg-yellow-400 text-black px-8 py-4 rounded-xl font-semibold hover:bg-yellow-300 transition-all duration-300 transform hover:scale-105;
}

.message-alert {
    @apply p-4 rounded-xl border;
}

.message-success {
    @apply bg-green-900/50 border-green-600 text-green-400;
}

.message-error {
    @apply bg-red-900/50 border-red-600 text-red-400;
}

.quick-info-grid {
    @apply grid gap-4;
}

.quick-info-item {
    @apply flex items-start space-x-3 p-4 bg-gray-800 rounded-xl border border-gray-700;
}

.quick-info-icon {
    @apply w-10 h-10 rounded-lg flex items-center justify-center text-black flex-shrink-0;
}

.social-btn {
    @apply w-10 h-10 rounded-lg flex items-center justify-center text-white transition-all duration-300 transform hover:scale-110;
}
</style>

<script>
function contactForm() {
    return {
        form: {
            name: '',
            email: '',
            phone: '',
            subject: '',
            message: ''
        },
        loading: false,
        message: '',
        messageType: '',
        
        async submitForm() {
            this.loading = true;
            this.message = '';
            
            try {
                // Simulate form submission
                await new Promise(resolve => setTimeout(resolve, 2000));
                
                // Reset form
                this.form = {
                    name: '',
                    email: '',
                    phone: '',
                    subject: '',
                    message: ''
                };
                
                this.message = '✅ Pesan berhasil dikirim! Kami akan merespons segera.';
                this.messageType = 'success';
                
                // Clear message after 5 seconds
                setTimeout(() => {
                    this.message = '';
                }, 5000);
                
            } catch (error) {
                this.message = '❌ Terjadi kesalahan. Silakan coba lagi.';
                this.messageType = 'error';
            }
            
            this.loading = false;
        }
    }
}
</script>

@endsection