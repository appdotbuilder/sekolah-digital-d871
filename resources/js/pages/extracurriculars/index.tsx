import React from 'react';
import { Link } from '@inertiajs/react';
import { Button } from '@/components/ui/button';

interface Extracurricular {
    id: number;
    name: string;
    description: string;
    image: string | null;
}

interface Props {
    extracurriculars: Extracurricular[];
    [key: string]: unknown;
}

export default function ExtracurricularsIndex({ extracurriculars }: Props) {
    return (
        <div className="min-h-screen bg-black text-white">
            {/* Navigation */}
            <nav className="bg-black shadow-lg border-b border-yellow-500/20">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex items-center justify-between h-16">
                        <Link href="/" className="flex items-center">
                            <h1 className="text-2xl font-bold text-yellow-400">🏫 SMA Negeri 1</h1>
                        </Link>
                        
                        <div className="hidden md:block">
                            <div className="ml-10 flex items-baseline space-x-4">
                                <Link href="/" className="text-white hover:text-yellow-400 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
                                    Beranda
                                </Link>
                                <Link href="/about" className="text-white hover:text-yellow-400 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
                                    Profil
                                </Link>
                                <Link href="/news" className="text-white hover:text-yellow-400 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
                                    Berita
                                </Link>
                                <Link href="/extracurriculars" className="text-yellow-400 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
                                    Ekstrakurikuler
                                </Link>
                                <Link href="/gallery" className="text-white hover:text-yellow-400 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
                                    Galeri
                                </Link>
                                <Link href="/facilities" className="text-white hover:text-yellow-400 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
                                    Fasilitas
                                </Link>
                                <Link href="/contact" className="text-white hover:text-yellow-400 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
                                    Kontak
                                </Link>
                            </div>
                        </div>

                        <Link href="/login">
                            <Button className="bg-yellow-400 text-black hover:bg-yellow-300 transform hover:scale-105 transition-all duration-300">
                                Login Admin
                            </Button>
                        </Link>
                    </div>
                </div>
            </nav>

            {/* Hero Section */}
            <div className="bg-gradient-to-b from-gray-900 to-black py-16">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h1 className="text-5xl font-bold text-yellow-400 mb-6">🎯 Ekstrakurikuler</h1>
                    <p className="text-xl text-gray-300 max-w-2xl mx-auto">
                        Kembangkan bakat, minat, dan potensi diri melalui berbagai kegiatan ekstrakurikuler yang menarik
                    </p>
                </div>
            </div>

            {/* Extracurriculars Grid */}
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                {extracurriculars.length === 0 ? (
                    <div className="text-center py-12">
                        <div className="text-6xl mb-4">🎯</div>
                        <h3 className="text-2xl font-semibold text-yellow-400 mb-2">Belum Ada Ekstrakurikuler</h3>
                        <p className="text-gray-400">Daftar kegiatan ekstrakurikuler akan segera ditampilkan di sini.</p>
                    </div>
                ) : (
                    <>
                        {/* Categories */}
                        <div className="mb-12">
                            <h2 className="text-3xl font-bold text-yellow-400 mb-8 text-center">🏆 Kategori Kegiatan</h2>
                            <div className="grid grid-cols-2 md:grid-cols-4 gap-4">
                                <div className="bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl p-6 text-center">
                                    <div className="text-3xl mb-2">🏃‍♂️</div>
                                    <h3 className="font-semibold text-white">Olahraga</h3>
                                </div>
                                <div className="bg-gradient-to-br from-purple-600 to-purple-800 rounded-xl p-6 text-center">
                                    <div className="text-3xl mb-2">🎨</div>
                                    <h3 className="font-semibold text-white">Seni & Budaya</h3>
                                </div>
                                <div className="bg-gradient-to-br from-green-600 to-green-800 rounded-xl p-6 text-center">
                                    <div className="text-3xl mb-2">🔬</div>
                                    <h3 className="font-semibold text-white">Sains & Teknologi</h3>
                                </div>
                                <div className="bg-gradient-to-br from-red-600 to-red-800 rounded-xl p-6 text-center">
                                    <div className="text-3xl mb-2">🏛️</div>
                                    <h3 className="font-semibold text-white">Organisasi</h3>
                                </div>
                            </div>
                        </div>

                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            {extracurriculars.map((ekskul, index) => {
                                const icons = ['🏆', '⭐', '🎯', '🚀', '💫', '🎪', '🎭', '🎪', '🎨', '🎵', '📚', '🏃‍♂️', '⚽', '🏀', '🏐'];
                                const colors = [
                                    'from-blue-600 to-blue-800',
                                    'from-green-600 to-green-800',
                                    'from-purple-600 to-purple-800',
                                    'from-red-600 to-red-800',
                                    'from-yellow-600 to-yellow-800',
                                    'from-indigo-600 to-indigo-800',
                                    'from-pink-600 to-pink-800',
                                    'from-teal-600 to-teal-800',
                                ];
                                
                                return (
                                    <div 
                                        key={ekskul.id} 
                                        className="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 hover:border-yellow-400/50 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-yellow-400/20"
                                    >
                                        <div className={`h-32 bg-gradient-to-br ${colors[index % colors.length]} flex items-center justify-center`}>
                                            <span className="text-5xl">{icons[index % icons.length]}</span>
                                        </div>
                                        <div className="p-6">
                                            <h3 className="text-xl font-semibold text-white mb-3">
                                                {ekskul.name}
                                            </h3>
                                            <p className="text-gray-400 mb-4 line-clamp-4">
                                                {ekskul.description}
                                            </p>
                                            <div className="flex items-center justify-between">
                                                <span className="text-sm text-yellow-400 bg-yellow-400/10 px-3 py-1 rounded-full">
                                                    Aktif
                                                </span>
                                                <Button size="sm" className="bg-yellow-400 text-black hover:bg-yellow-300 transform hover:scale-105 transition-all duration-300">
                                                    Selengkapnya
                                                </Button>
                                            </div>
                                        </div>
                                    </div>
                                );
                            })}
                        </div>

                        {/* Benefits Section */}
                        <div className="mt-16">
                            <h2 className="text-3xl font-bold text-yellow-400 mb-8 text-center">🌟 Manfaat Mengikuti Ekstrakurikuler</h2>
                            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                <div className="bg-gray-900 rounded-xl p-6 text-center border border-yellow-500/20">
                                    <div className="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <span className="text-2xl text-black">🎯</span>
                                    </div>
                                    <h4 className="font-semibold text-white mb-2">Mengembangkan Bakat</h4>
                                    <p className="text-gray-400 text-sm">Eksplorasi dan kembangkan potensi diri di bidang yang diminati</p>
                                </div>
                                
                                <div className="bg-gray-900 rounded-xl p-6 text-center border border-yellow-500/20">
                                    <div className="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <span className="text-2xl text-black">🤝</span>
                                    </div>
                                    <h4 className="font-semibold text-white mb-2">Membangun Relasi</h4>
                                    <p className="text-gray-400 text-sm">Bertemu dan berinteraksi dengan teman-teman baru</p>
                                </div>
                                
                                <div className="bg-gray-900 rounded-xl p-6 text-center border border-yellow-500/20">
                                    <div className="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <span className="text-2xl text-black">🏆</span>
                                    </div>
                                    <h4 className="font-semibold text-white mb-2">Meraih Prestasi</h4>
                                    <p className="text-gray-400 text-sm">Kesempatan berkompetisi dan meraih prestasi di berbagai level</p>
                                </div>
                                
                                <div className="bg-gray-900 rounded-xl p-6 text-center border border-yellow-500/20">
                                    <div className="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <span className="text-2xl text-black">💪</span>
                                    </div>
                                    <h4 className="font-semibold text-white mb-2">Membentuk Karakter</h4>
                                    <p className="text-gray-400 text-sm">Melatih kedisiplinan, tanggung jawab, dan kepemimpinan</p>
                                </div>
                            </div>
                        </div>
                    </>
                )}

                {/* CTA Section */}
                <div className="mt-16 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-xl p-12 text-center text-black">
                    <h2 className="text-3xl font-bold mb-4">🚀 Siap Bergabung?</h2>
                    <p className="text-xl mb-8 max-w-2xl mx-auto">
                        Pilih ekstrakurikuler yang sesuai dengan minat dan bakatmu. Mari berkembang bersama!
                    </p>
                    <div className="flex flex-col sm:flex-row gap-4 justify-center">
                        <Link href="/ppdb">
                            <Button className="bg-black text-yellow-400 hover:bg-gray-800 px-8 py-3 rounded-full text-lg transform hover:scale-105 transition-all duration-300">
                                📝 Daftar Sebagai Siswa
                            </Button>
                        </Link>
                        <Link href="/contact">
                            <Button variant="outline" className="border-black text-black hover:bg-black hover:text-yellow-400 px-8 py-3 rounded-full text-lg transform hover:scale-105 transition-all duration-300">
                                💬 Tanya Detail Kegiatan
                            </Button>
                        </Link>
                    </div>
                </div>
            </div>

            {/* Footer */}
            <footer className="bg-black border-t border-yellow-500/20 py-12">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <p className="text-gray-400">© 2024 SMA Negeri 1. Semua hak cipta dilindungi.</p>
                </div>
            </footer>
        </div>
    );
}