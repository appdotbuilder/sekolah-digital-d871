@extends('layouts.app')

@section('title', 'Tentang Kami - SMK Negeri 1')

@section('content')

<!-- Hero Section -->
<section class="relative bg-black overflow-hidden py-20">
    <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-black/60 z-10"></div>
    <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="none" fill-rule="evenodd"%3E%3Cg fill="%23FFD700" fill-opacity="0.05"%3E%3Ccircle cx="30" cy="30" r="1"/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>
    
    <div class="relative z-20 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl font-bold text-white mb-6">
            <span class="text-yellow-400">🏫 Tentang</span> SMK Negeri 1
        </h1>
        <p class="text-xl text-gray-300 max-w-3xl mx-auto">
            Membangun karakter, mengembangkan kompetensi, dan mencetak generasi unggul 
            yang siap menghadapi tantangan dunia kerja
        </p>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-20 bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Vision -->
            <div class="vision-card">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-yellow-400 rounded-xl flex items-center justify-center mr-4">
                        <span class="text-2xl">👁️</span>
                    </div>
                    <h2 class="text-3xl font-bold text-yellow-400">Visi</h2>
                </div>
                <p class="text-lg text-gray-300 leading-relaxed">
                    Menjadi Sekolah Menengah Kejuruan yang unggul, inovatif, dan berkarakter dalam 
                    menghasilkan lulusan yang kompeten, mandiri, dan berakhlak mulia sesuai dengan 
                    perkembangan teknologi dan kebutuhan dunia industri.
                </p>
            </div>
            
            <!-- Mission -->
            <div class="mission-card">
                <div class="flex items-center mb-6">
                    <div class="w-12 h-12 bg-yellow-400 rounded-xl flex items-center justify-center mr-4">
                        <span class="text-2xl">🎯</span>
                    </div>
                    <h2 class="text-3xl font-bold text-yellow-400">Misi</h2>
                </div>
                <ul class="space-y-4 text-gray-300">
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-3 mt-1">✓</span>
                        <span>Menyelenggarakan pendidikan kejuruan yang berkualitas dan relevan dengan kebutuhan dunia usaha</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-3 mt-1">✓</span>
                        <span>Mengembangkan kompetensi siswa melalui pembelajaran yang inovatif dan berbasis teknologi</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-3 mt-1">✓</span>
                        <span>Membentuk karakter siswa yang berakhlak mulia, mandiri, dan memiliki jiwa kewirausahaan</span>
                    </li>
                    <li class="flex items-start">
                        <span class="text-yellow-400 mr-3 mt-1">✓</span>
                        <span>Membangun kemitraan strategis dengan dunia usaha dan industri</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="py-20 bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="section-title">🌟 Nilai-Nilai Kami</h2>
            <p class="section-subtitle">Landasan yang membentuk karakter dan budaya sekolah</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="value-card group">
                <div class="value-icon bg-blue-600">
                    <span class="text-3xl">🎓</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Excellence</h3>
                <p class="text-gray-400">Berkomitmen untuk memberikan pendidikan berkualitas tinggi dan mencapai prestasi terbaik</p>
            </div>
            
            <div class="value-card group">
                <div class="value-icon bg-red-600">
                    <span class="text-3xl">🤝</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Integrity</h3>
                <p class="text-gray-400">Menjunjung tinggi kejujuran, transparansi, dan etika dalam setiap tindakan</p>
            </div>
            
            <div class="value-card group">
                <div class="value-icon bg-green-600">
                    <span class="text-3xl">💡</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Innovation</h3>
                <p class="text-gray-400">Mendorong kreativitas dan inovasi dalam pembelajaran dan pengembangan diri</p>
            </div>
            
            <div class="value-card group">
                <div class="value-icon bg-purple-600">
                    <span class="text-3xl">🌍</span>
                </div>
                <h3 class="text-xl font-bold text-white mb-3">Global Mindset</h3>
                <p class="text-gray-400">Mempersiapkan siswa untuk bersaing di tingkat global dengan wawasan internasional</p>
            </div>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section class="py-20 bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="section-title">📚 Program Keahlian</h2>
            <p class="section-subtitle">Beragam jurusan yang sesuai dengan kebutuhan industri</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="program-card">
                <div class="program-header bg-gradient-to-r from-blue-600 to-blue-700">
                    <span class="text-4xl mb-4 block">💻</span>
                    <h3 class="text-xl font-bold text-white">Teknik Komputer & Jaringan</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-400 mb-4">Mempelajari instalasi, konfigurasi, dan pemeliharaan sistem komputer dan jaringan</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Networking & System Administration</li>
                        <li>• Hardware & Software Maintenance</li>
                        <li>• Cyber Security Basics</li>
                    </ul>
                </div>
            </div>
            
            <div class="program-card">
                <div class="program-header bg-gradient-to-r from-green-600 to-green-700">
                    <span class="text-4xl mb-4 block">📱</span>
                    <h3 class="text-xl font-bold text-white">Rekayasa Perangkat Lunak</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-400 mb-4">Mengembangkan aplikasi mobile dan web dengan teknologi terkini</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Mobile App Development</li>
                        <li>• Web Programming</li>
                        <li>• Database Management</li>
                    </ul>
                </div>
            </div>
            
            <div class="program-card">
                <div class="program-header bg-gradient-to-r from-yellow-600 to-orange-600">
                    <span class="text-4xl mb-4 block">🏗️</span>
                    <h3 class="text-xl font-bold text-white">Teknik Sipil</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-400 mb-4">Mempelajari konstruksi bangunan, infrastruktur, dan perencanaan sipil</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Building Construction</li>
                        <li>• Structure Design</li>
                        <li>• Project Management</li>
                    </ul>
                </div>
            </div>
            
            <div class="program-card">
                <div class="program-header bg-gradient-to-r from-purple-600 to-purple-700">
                    <span class="text-4xl mb-4 block">⚡</span>
                    <h3 class="text-xl font-bold text-white">Teknik Elektro</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-400 mb-4">Instalasi dan pemeliharaan sistem kelistrikan industri dan rumah tangga</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Electrical Installation</li>
                        <li>• Industrial Electronics</li>
                        <li>• Power Systems</li>
                    </ul>
                </div>
            </div>
            
            <div class="program-card">
                <div class="program-header bg-gradient-to-r from-red-600 to-red-700">
                    <span class="text-4xl mb-4 block">🔧</span>
                    <h3 class="text-xl font-bold text-white">Teknik Mesin</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-400 mb-4">Manufaktur, pemeliharaan, dan perbaikan mesin industri</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Machine Operations</li>
                        <li>• Manufacturing Processes</li>
                        <li>• Quality Control</li>
                    </ul>
                </div>
            </div>
            
            <div class="program-card">
                <div class="program-header bg-gradient-to-r from-indigo-600 to-indigo-700">
                    <span class="text-4xl mb-4 block">💼</span>
                    <h3 class="text-xl font-bold text-white">Akuntansi & Keuangan</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-400 mb-4">Mengelola keuangan, akuntansi, dan administrasi bisnis</p>
                    <ul class="text-sm text-gray-500 space-y-1">
                        <li>• Financial Accounting</li>
                        <li>• Business Administration</li>
                        <li>• Tax Management</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Facilities Section -->
<section class="py-20 bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="section-title">🏢 Fasilitas Unggulan</h2>
            <p class="section-subtitle">Infrastruktur modern untuk mendukung pembelajaran optimal</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="facility-card">
                <div class="facility-icon">📚</div>
                <h3 class="facility-title">Perpustakaan Digital</h3>
                <p class="facility-desc">Koleksi buku dan e-book terlengkap dengan akses online 24/7</p>
            </div>
            
            <div class="facility-card">
                <div class="facility-icon">🔬</div>
                <h3 class="facility-title">Laboratorium</h3>
                <p class="facility-desc">Lab komputer, elektronika, dan praktikum dengan peralatan modern</p>
            </div>
            
            <div class="facility-card">
                <div class="facility-icon">🏭</div>
                <h3 class="facility-title">Workshop</h3>
                <p class="facility-desc">Bengkel kerja dengan standar industri untuk praktik langsung</p>
            </div>
            
            <div class="facility-card">
                <div class="facility-icon">🏃</div>
                <h3 class="facility-title">Fasilitas Olahraga</h3>
                <p class="facility-desc">Lapangan basket, futsal, dan gym untuk pengembangan fisik</p>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-20 bg-gradient-to-r from-yellow-400 to-yellow-500">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-black mb-4">📊 Prestasi Kami</h2>
            <p class="text-xl text-black/80">Pencapaian yang membanggakan dalam bidang akademik dan non-akademik</p>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="stats-card">
                <div class="stats-number">1000+</div>
                <div class="stats-label">Siswa Aktif</div>
            </div>
            <div class="stats-card">
                <div class="stats-number">95%</div>
                <div class="stats-label">Tingkat Kelulusan</div>
            </div>
            <div class="stats-card">
                <div class="stats-number">85%</div>
                <div class="stats-label">Siswa Terserap Kerja</div>
            </div>
            <div class="stats-card">
                <div class="stats-number">200+</div>
                <div class="stats-label">Mitra Industri</div>
            </div>
        </div>
    </div>
</section>

<style>
.vision-card, .mission-card {
    @apply bg-gray-800 p-8 rounded-2xl border border-gray-700 hover:border-yellow-400 transition-all duration-300;
}

.value-card {
    @apply bg-gray-800 p-6 rounded-2xl text-center border border-gray-700 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105;
}

.value-icon {
    @apply w-16 h-16 rounded-2xl flex items-center justify-center mx-auto mb-4 transition-transform duration-300 group-hover:scale-110;
}

.program-card {
    @apply bg-gray-800 rounded-2xl overflow-hidden border border-gray-700 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105;
}

.program-header {
    @apply p-6 text-center;
}

.facility-card {
    @apply bg-gray-800 p-6 rounded-2xl text-center border border-gray-700 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105;
}

.facility-icon {
    @apply text-4xl mb-4 block;
}

.facility-title {
    @apply text-lg font-bold text-white mb-2;
}

.facility-desc {
    @apply text-sm text-gray-400;
}

.stats-card {
    @apply text-center p-6 bg-black/20 rounded-2xl backdrop-blur-sm;
}

.stats-number {
    @apply text-4xl font-bold text-black mb-2;
}

.stats-label {
    @apply text-black/80;
}

.section-title {
    @apply text-4xl font-bold text-white mb-4;
}

.section-subtitle {
    @apply text-xl text-gray-400 max-w-2xl mx-auto;
}
</style>

@endsection