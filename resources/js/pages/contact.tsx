import React from 'react';
import { Link } from '@inertiajs/react';
import { Button } from '@/components/ui/button';

export default function Contact() {
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
                                <Link href="/extracurriculars" className="text-white hover:text-yellow-400 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
                                    Ekstrakurikuler
                                </Link>
                                <Link href="/gallery" className="text-white hover:text-yellow-400 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
                                    Galeri
                                </Link>
                                <Link href="/facilities" className="text-white hover:text-yellow-400 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
                                    Fasilitas
                                </Link>
                                <Link href="/contact" className="text-yellow-400 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
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
                    <h1 className="text-5xl font-bold text-yellow-400 mb-6">📞 Hubungi Kami</h1>
                    <p className="text-xl text-gray-300 max-w-2xl mx-auto">
                        Kami siap membantu Anda. Jangan ragu untuk menghubungi kami kapan saja
                    </p>
                </div>
            </div>

            {/* Contact Info */}
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
                    {/* Contact Information */}
                    <div>
                        <h2 className="text-3xl font-bold text-yellow-400 mb-8">📍 Informasi Kontak</h2>
                        
                        <div className="space-y-6">
                            <div className="bg-gray-900 rounded-xl p-6 border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300">
                                <div className="flex items-start">
                                    <div className="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <span className="text-2xl text-black">📍</span>
                                    </div>
                                    <div>
                                        <h3 className="text-lg font-semibold text-white mb-2">Alamat Sekolah</h3>
                                        <p className="text-gray-300">
                                            Jl. Pendidikan No. 123<br/>
                                            Jakarta Selatan, 12345<br/>
                                            Indonesia
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div className="bg-gray-900 rounded-xl p-6 border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300">
                                <div className="flex items-start">
                                    <div className="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <span className="text-2xl text-black">📞</span>
                                    </div>
                                    <div>
                                        <h3 className="text-lg font-semibold text-white mb-2">Telepon</h3>
                                        <p className="text-gray-300">
                                            (021) 1234-5678<br/>
                                            (021) 1234-5679 (Fax)
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div className="bg-gray-900 rounded-xl p-6 border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300">
                                <div className="flex items-start">
                                    <div className="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <span className="text-2xl text-black">✉️</span>
                                    </div>
                                    <div>
                                        <h3 className="text-lg font-semibold text-white mb-2">Email</h3>
                                        <p className="text-gray-300">
                                            info@sman1.sch.id<br/>
                                            ppdb@sman1.sch.id
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div className="bg-gray-900 rounded-xl p-6 border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300">
                                <div className="flex items-start">
                                    <div className="w-12 h-12 bg-yellow-400 rounded-full flex items-center justify-center mr-4 flex-shrink-0">
                                        <span className="text-2xl text-black">🕒</span>
                                    </div>
                                    <div>
                                        <h3 className="text-lg font-semibold text-white mb-2">Jam Operasional</h3>
                                        <p className="text-gray-300">
                                            Senin - Jumat: 07.00 - 16.00 WIB<br/>
                                            Sabtu: 07.00 - 12.00 WIB<br/>
                                            Minggu & Libur: Tutup
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {/* Google Maps */}
                    <div>
                        <h2 className="text-3xl font-bold text-yellow-400 mb-8">🗺️ Lokasi Sekolah</h2>
                        
                        <div className="bg-gray-900 rounded-xl p-6 border border-yellow-500/20">
                            <div className="aspect-video bg-gray-800 rounded-lg flex items-center justify-center mb-6">
                                <div className="text-center">
                                    <div className="text-4xl mb-4">🗺️</div>
                                    <p className="text-gray-400">Google Maps akan dimuat di sini</p>
                                    <p className="text-sm text-gray-500 mt-2">
                                        Embed Google Maps dengan koordinat lokasi sekolah
                                    </p>
                                </div>
                            </div>
                            
                            <div className="text-center">
                                <Button className="bg-yellow-400 text-black hover:bg-yellow-300 transform hover:scale-105 transition-all duration-300">
                                    📍 Buka di Google Maps
                                </Button>
                            </div>
                        </div>

                        {/* Transportation */}
                        <div className="mt-8 bg-gray-900 rounded-xl p-6 border border-yellow-500/20">
                            <h3 className="text-xl font-semibold text-yellow-400 mb-4">🚌 Transportasi</h3>
                            <div className="space-y-3 text-gray-300">
                                <div className="flex items-center">
                                    <span className="text-yellow-400 mr-2">•</span>
                                    <span>Bus: Halte Pendidikan (200m dari sekolah)</span>
                                </div>
                                <div className="flex items-center">
                                    <span className="text-yellow-400 mr-2">•</span>
                                    <span>KRL: Stasiun Sudirman (15 menit dengan angkot)</span>
                                </div>
                                <div className="flex items-center">
                                    <span className="text-yellow-400 mr-2">•</span>
                                    <span>Parkir: Tersedia area parkir luas untuk kendaraan</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Quick Actions */}
                <div className="mt-16">
                    <h2 className="text-3xl font-bold text-yellow-400 mb-8 text-center">⚡ Kontak Cepat</h2>
                    
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <a 
                            href="tel:+622112345678" 
                            className="block bg-gradient-to-br from-green-600 to-green-800 rounded-xl p-6 text-center hover:from-green-500 hover:to-green-700 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl"
                        >
                            <div className="text-4xl mb-4">📞</div>
                            <h3 className="text-xl font-semibold text-white mb-2">Telepon</h3>
                            <p className="text-green-100">Hubungi langsung</p>
                        </a>
                        
                        <a 
                            href="https://wa.me/628123456789" 
                            className="block bg-gradient-to-br from-green-500 to-green-700 rounded-xl p-6 text-center hover:from-green-400 hover:to-green-600 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl"
                        >
                            <div className="text-4xl mb-4">💬</div>
                            <h3 className="text-xl font-semibold text-white mb-2">WhatsApp</h3>
                            <p className="text-green-100">Chat langsung</p>
                        </a>
                        
                        <a 
                            href="mailto:info@sman1.sch.id" 
                            className="block bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl p-6 text-center hover:from-blue-500 hover:to-blue-700 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl"
                        >
                            <div className="text-4xl mb-4">✉️</div>
                            <h3 className="text-xl font-semibold text-white mb-2">Email</h3>
                            <p className="text-blue-100">Kirim pesan</p>
                        </a>
                        
                        <Link 
                            href="/feedback" 
                            className="block bg-gradient-to-br from-purple-600 to-purple-800 rounded-xl p-6 text-center hover:from-purple-500 hover:to-purple-700 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl"
                        >
                            <div className="text-4xl mb-4">💭</div>
                            <h3 className="text-xl font-semibold text-white mb-2">Saran</h3>
                            <p className="text-purple-100">Kotak saran</p>
                        </Link>
                    </div>
                </div>

                {/* CTA Section */}
                <div className="mt-16 bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-xl p-12 text-center text-black">
                    <h2 className="text-3xl font-bold mb-4">🎓 Ada Pertanyaan tentang PPDB?</h2>
                    <p className="text-xl mb-8 max-w-2xl mx-auto">
                        Tim kami siap membantu Anda dengan informasi lengkap mengenai pendaftaran siswa baru
                    </p>
                    <div className="flex flex-col sm:flex-row gap-4 justify-center">
                        <Link href="/ppdb">
                            <Button className="bg-black text-yellow-400 hover:bg-gray-800 px-8 py-3 rounded-full text-lg transform hover:scale-105 transition-all duration-300">
                                📝 Daftar PPDB Sekarang
                            </Button>
                        </Link>
                        <a href="tel:+622112345678">
                            <Button variant="outline" className="border-black text-black hover:bg-black hover:text-yellow-400 px-8 py-3 rounded-full text-lg transform hover:scale-105 transition-all duration-300">
                                📞 Hubungi Sekarang
                            </Button>
                        </a>
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