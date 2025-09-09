@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil - SMK Negeri 1')

@section('content')

<!-- Success Section -->
<section class="py-20 bg-gradient-to-br from-green-900 via-black to-black min-h-screen flex items-center">
    <div class="mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
        <!-- Success Icon -->
        <div class="mb-8 animate-bounce">
            <div class="inline-flex items-center justify-center w-32 h-32 bg-gradient-to-br from-green-400 to-green-600 rounded-full shadow-2xl mb-6">
                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                </svg>
            </div>
        </div>
        
        <!-- Success Title -->
        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
            🎉 <span class="text-green-400">Pendaftaran Berhasil!</span>
        </h1>
        
        <!-- Success Message -->
        <div class="success-card mb-12">
            <h2 class="text-2xl font-bold text-white mb-4">
                Terima kasih telah mendaftar di SMK Negeri 1!
            </h2>
            <p class="text-gray-300 text-lg leading-relaxed mb-6">
                Data pendaftaran Anda telah berhasil diterima dan tersimpan dalam sistem kami. 
                Tim admission SMK Negeri 1 akan menghubungi Anda dalam waktu 2-3 hari kerja 
                untuk informasi selanjutnya mengenai proses seleksi.
            </p>
            
            <!-- Registration Number -->
            <div class="registration-number">
                <h3 class="text-lg font-semibold text-yellow-400 mb-2">
                    📋 Nomor Registrasi Anda
                </h3>
                <div class="registration-code">
                    {{ 'PPDB-' . date('Y') . '-' . str_pad(random_int(1, 9999), 4, '0', STR_PAD_LEFT) }}
                </div>
                <p class="text-sm text-gray-400 mt-2">
                    Simpan nomor registrasi ini untuk keperluan seleksi
                </p>
            </div>
        </div>
        
        <!-- Next Steps -->
        <div class="next-steps-grid mb-12">
            <div class="step-card">
                <div class="step-icon bg-blue-600">
                    <span class="text-2xl">📞</span>
                </div>
                <h3 class="step-title">Konfirmasi Tim</h3>
                <p class="step-desc">Tim admission akan menghubungi Anda untuk konfirmasi data dan jadwal seleksi</p>
            </div>
            
            <div class="step-card">
                <div class="step-icon bg-green-600">
                    <span class="text-2xl">📄</span>
                </div>
                <h3 class="step-title">Persiapkan Dokumen</h3>
                <p class="step-desc">Siapkan dokumen asli ijazah, raport, dan dokumen pendukung lainnya</p>
            </div>
            
            <div class="step-card">
                <div class="step-icon bg-purple-600">
                    <span class="text-2xl">📝</span>
                </div>
                <h3 class="step-title">Tes Seleksi</h3>
                <p class="step-desc">Ikuti tes seleksi sesuai jadwal yang akan diberitahukan</p>
            </div>
        </div>
        
        <!-- Contact Info -->
        <div class="contact-info-card mb-12">
            <h3 class="text-xl font-bold text-white mb-4">
                📞 Butuh Bantuan?
            </h3>
            <p class="text-gray-300 mb-4">
                Jika ada pertanyaan atau membutuhkan informasi lebih lanjut, 
                jangan ragu untuk menghubungi kami:
            </p>
            
            <div class="contact-methods">
                <a href="tel:+6221-1234-5680" class="contact-btn">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    (021) 1234-5680
                </a>
                
                <a href="mailto:ppdb@smkn1.sch.id" class="contact-btn">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    ppdb@smkn1.sch.id
                </a>
                
                <a href="https://wa.me/6281234567890" target="_blank" class="contact-btn bg-green-600 hover:bg-green-500">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                    </svg>
                    WhatsApp Support
                </a>
            </div>
        </div>
        
        <!-- Action Buttons -->
        <div class="action-buttons">
            <a href="{{ route('home') }}" class="btn-primary group">
                <span>🏠 Kembali ke Beranda</span>
                <svg class="ml-2 h-5 w-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
            
            <button onclick="window.print()" class="btn-secondary group">
                <svg class="mr-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"/>
                </svg>
                <span>Cetak Bukti</span>
            </button>
        </div>
        
        <!-- Share -->
        <div class="mt-12 text-center">
            <p class="text-gray-400 mb-4">Bagikan kabar baik ini:</p>
            <div class="flex justify-center space-x-4">
                <a href="https://twitter.com/intent/tweet?text=Saya%20baru%20saja%20mendaftar%20di%20SMK%20Negeri%201!%20%F0%9F%8E%89" 
                   target="_blank" 
                   class="social-share-btn bg-blue-500 hover:bg-blue-400">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                </a>
                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" 
                   target="_blank" 
                   class="social-share-btn bg-blue-600 hover:bg-blue-500">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                <a href="https://wa.me/?text=Saya%20baru%20saja%20mendaftar%20di%20SMK%20Negeri%201!%20🎉%20{{ urlencode(request()->url()) }}" 
                   target="_blank" 
                   class="social-share-btn bg-green-600 hover:bg-green-500">
                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.success-card {
    @apply bg-gray-900/80 backdrop-blur-sm p-8 rounded-2xl border border-green-400/30 shadow-2xl;
    animation: fadeInUp 0.8s ease-out 0.2s both;
}

.registration-number {
    @apply bg-gray-800 p-6 rounded-xl border border-gray-700;
}

.registration-code {
    @apply text-2xl font-mono font-bold text-yellow-400 bg-gray-900 px-4 py-2 rounded-lg border border-yellow-400/30 inline-block;
}

.next-steps-grid {
    @apply grid gap-6 md:grid-cols-3;
    animation: fadeInUp 0.8s ease-out 0.4s both;
}

.step-card {
    @apply bg-gray-800 p-6 rounded-xl text-center border border-gray-700 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105;
}

.step-icon {
    @apply w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4;
}

.step-title {
    @apply text-lg font-bold text-white mb-2;
}

.step-desc {
    @apply text-gray-400 text-sm;
}

.contact-info-card {
    @apply bg-gray-800/50 backdrop-blur-sm p-6 rounded-xl border border-gray-700;
    animation: fadeInUp 0.8s ease-out 0.6s both;
}

.contact-methods {
    @apply flex flex-wrap justify-center gap-4;
}

.contact-btn {
    @apply inline-flex items-center space-x-2 bg-gray-700 hover:bg-gray-600 text-white px-4 py-3 rounded-lg transition-all duration-300 transform hover:scale-105;
}

.action-buttons {
    @apply flex flex-col sm:flex-row gap-4 justify-center;
    animation: fadeInUp 0.8s ease-out 0.8s both;
}

.btn-primary {
    @apply bg-yellow-400 text-black px-8 py-4 rounded-xl font-semibold hover:bg-yellow-300 transition-all duration-300 transform hover:scale-105 inline-flex items-center;
}

.btn-secondary {
    @apply bg-gray-700 text-white px-8 py-4 rounded-xl font-semibold hover:bg-gray-600 transition-all duration-300 transform hover:scale-105 inline-flex items-center;
}

.social-share-btn {
    @apply w-10 h-10 rounded-lg flex items-center justify-center text-white transition-all duration-300 transform hover:scale-110;
}

@media print {
    .action-buttons, .contact-methods, .social-share-btn {
        display: none !important;
    }
}
</style>

@endsection