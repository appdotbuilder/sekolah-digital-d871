@extends('layouts.app')

@section('title', 'Dashboard - SMK Negeri 1')

@section('content')

<!-- Dashboard Header -->
<section class="bg-gray-900 py-16">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="inline-flex items-center justify-center w-20 h-20 bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-full shadow-2xl mb-6">
                <span class="text-3xl">👑</span>
            </div>
            <h1 class="text-4xl font-bold text-white mb-4">
                Selamat Datang, <span class="text-yellow-400">{{ auth()->user()->name ?? 'Admin' }}</span>!
            </h1>
            <p class="text-xl text-gray-300">
                Dashboard Administratif SMK Negeri 1
            </p>
        </div>
    </div>
</section>

<!-- Stats Overview -->
<section class="py-12 bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Total Students -->
            <div class="dashboard-card">
                <div class="dashboard-icon bg-blue-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-white">1,245</h3>
                    <p class="text-gray-400">Total Siswa</p>
                    <div class="flex items-center mt-2">
                        <span class="text-green-400 text-sm">↗ +5.2%</span>
                        <span class="text-gray-500 text-sm ml-1">vs bulan lalu</span>
                    </div>
                </div>
            </div>

            <!-- Teachers -->
            <div class="dashboard-card">
                <div class="dashboard-icon bg-green-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-white">87</h3>
                    <p class="text-gray-400">Total Guru</p>
                    <div class="flex items-center mt-2">
                        <span class="text-green-400 text-sm">↗ +2</span>
                        <span class="text-gray-500 text-sm ml-1">guru baru</span>
                    </div>
                </div>
            </div>

            <!-- PPDB Applications -->
            <div class="dashboard-card">
                <div class="dashboard-icon bg-yellow-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-white">324</h3>
                    <p class="text-gray-400">Pendaftar PPDB</p>
                    <div class="flex items-center mt-2">
                        <span class="text-yellow-400 text-sm">📈 Active</span>
                        <span class="text-gray-500 text-sm ml-1">periode 2024</span>
                    </div>
                </div>
            </div>

            <!-- News Articles -->
            <div class="dashboard-card">
                <div class="dashboard-icon bg-purple-600">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-white">47</h3>
                    <p class="text-gray-400">Artikel Berita</p>
                    <div class="flex items-center mt-2">
                        <span class="text-blue-400 text-sm">✍️ 12 draft</span>
                        <span class="text-gray-500 text-sm ml-1">belum publish</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="py-16 bg-gray-900">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-white mb-4">
                ⚡ Aksi Cepat
            </h2>
            <p class="text-gray-400">
                Fitur yang paling sering digunakan
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Create News -->
            <div class="action-card group">
                <div class="action-icon bg-blue-600 group-hover:bg-blue-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
                <h3 class="action-title">Tulis Berita Baru</h3>
                <p class="action-desc">Buat dan publikasikan artikel berita terbaru untuk website</p>
                <button class="action-btn">
                    Buat Sekarang
                </button>
            </div>

            <!-- View PPDB -->
            <div class="action-card group">
                <div class="action-icon bg-green-600 group-hover:bg-green-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                </div>
                <h3 class="action-title">Kelola Pendaftaran</h3>
                <p class="action-desc">Lihat dan kelola data pendaftar PPDB yang masuk</p>
                <button class="action-btn">
                    Lihat Data
                </button>
            </div>

            <!-- Manage Gallery -->
            <div class="action-card group">
                <div class="action-icon bg-purple-600 group-hover:bg-purple-500">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                    </svg>
                </div>
                <h3 class="action-title">Upload Galeri</h3>
                <p class="action-desc">Tambahkan foto kegiatan sekolah ke galeri</p>
                <button class="action-btn">
                    Upload Foto
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Recent Activity -->
<section class="py-16 bg-black">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Recent News -->
            <div class="activity-section">
                <h3 class="section-title">📰 Berita Terbaru</h3>
                <div class="activity-list">
                    <div class="activity-item">
                        <div class="activity-icon bg-blue-600">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5a2.5 2.5 0 00-2.5-2.5H15"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="activity-title">Penerimaan Siswa Baru 2024 Dibuka</h4>
                            <p class="activity-meta">2 jam yang lalu • Published</p>
                        </div>
                        <span class="activity-badge bg-green-600">Live</span>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon bg-yellow-600">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="activity-title">Prestasi Siswa Kompetisi Robotik</h4>
                            <p class="activity-meta">5 jam yang lalu • Draft</p>
                        </div>
                        <span class="activity-badge bg-gray-600">Draft</span>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon bg-purple-600">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="activity-title">Jadwal Ujian Semester Genap</h4>
                            <p class="activity-meta">1 hari yang lalu • Published</p>
                        </div>
                        <span class="activity-badge bg-green-600">Live</span>
                    </div>
                </div>
            </div>

            <!-- Recent Registrations -->
            <div class="activity-section">
                <h3 class="section-title">📝 Pendaftaran Terbaru</h3>
                <div class="activity-list">
                    <div class="activity-item">
                        <div class="activity-icon bg-green-600">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="activity-title">Ahmad Fauzi</h4>
                            <p class="activity-meta">10 menit yang lalu • Teknik Komputer Jaringan</p>
                        </div>
                        <span class="activity-badge bg-blue-600">New</span>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon bg-green-600">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="activity-title">Siti Nurhaliza</h4>
                            <p class="activity-meta">25 menit yang lalu • Rekayasa Perangkat Lunak</p>
                        </div>
                        <span class="activity-badge bg-blue-600">New</span>
                    </div>

                    <div class="activity-item">
                        <div class="activity-icon bg-green-600">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h4 class="activity-title">Budi Santoso</h4>
                            <p class="activity-meta">1 jam yang lalu • Teknik Sipil</p>
                        </div>
                        <span class="activity-badge bg-gray-600">Pending</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.dashboard-card {
    @apply bg-gray-800 p-6 rounded-2xl border border-gray-700 hover:border-yellow-400 transition-all duration-300 flex items-center space-x-4;
}

.dashboard-icon {
    @apply w-16 h-16 rounded-2xl flex items-center justify-center text-white flex-shrink-0;
}

.action-card {
    @apply bg-gray-800 p-6 rounded-2xl border border-gray-700 hover:border-yellow-400 transition-all duration-300 transform hover:scale-105 text-center;
}

.action-icon {
    @apply w-12 h-12 rounded-xl flex items-center justify-center mx-auto mb-4 text-white transition-colors;
}

.action-title {
    @apply text-lg font-bold text-white mb-2;
}

.action-desc {
    @apply text-gray-400 text-sm mb-4;
}

.action-btn {
    @apply bg-yellow-400 text-black px-4 py-2 rounded-lg font-semibold hover:bg-yellow-300 transition-colors;
}

.activity-section {
    @apply bg-gray-800 p-6 rounded-2xl border border-gray-700;
}

.section-title {
    @apply text-xl font-bold text-white mb-6 pb-3 border-b border-gray-700;
}

.activity-list {
    @apply space-y-4;
}

.activity-item {
    @apply flex items-center space-x-3 p-3 bg-gray-700 rounded-xl hover:bg-gray-600 transition-colors;
}

.activity-icon {
    @apply w-8 h-8 rounded-lg flex items-center justify-center text-white flex-shrink-0;
}

.activity-title {
    @apply font-semibold text-white text-sm;
}

.activity-meta {
    @apply text-xs text-gray-400;
}

.activity-badge {
    @apply px-2 py-1 rounded-full text-xs font-medium text-white;
}
</style>

@endsection