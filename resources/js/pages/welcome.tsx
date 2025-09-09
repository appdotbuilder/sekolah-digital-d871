import React from 'react';
import { Button } from '@/components/ui/button';
import { Link } from '@inertiajs/react';

interface News {
    id: number;
    title: string;
    slug: string;
    content: string;
    image: string | null;
    published_at: string;
}

interface Extracurricular {
    id: number;
    name: string;
    description: string;
    image: string | null;
}

interface Gallery {
    id: number;
    type: string;
    url: string;
    description: string | null;
}

interface Props {
    latestNews: News[];
    extracurriculars: Extracurricular[];
    recentPhotos: Gallery[];
    [key: string]: unknown;
}

export default function Welcome({ latestNews, extracurriculars }: Props) {
    return (
        <div className="min-h-screen bg-black text-white">
            {/* Navigation */}
            <nav className="bg-black shadow-lg border-b border-yellow-500/20">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex items-center justify-between h-16">
                        <div className="flex items-center">
                            <h1 className="text-2xl font-bold text-yellow-400">🏫 SMA Negeri 1</h1>
                        </div>
                        
                        <div className="hidden md:block">
                            <div className="ml-10 flex items-baseline space-x-4">
                                <Link href="/" className="text-yellow-400 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
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
                                <Link href="/contact" className="text-white hover:text-yellow-400 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
                                    Kontak
                                </Link>
                            </div>
                        </div>

                        <div className="flex items-center space-x-4">
                            <Link href="/login">
                                <Button className="bg-yellow-400 text-black hover:bg-yellow-300 transform hover:scale-105 transition-all duration-300">
                                    Login Admin
                                </Button>
                            </Link>
                        </div>
                    </div>
                </div>
            </nav>

            {/* Hero Section */}
            <div className="relative bg-gradient-to-b from-black via-gray-900 to-black">
                <div className="absolute inset-0 bg-black/60"></div>
                <div className="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-24">
                    <div className="text-center">
                        <h1 className="text-5xl md:text-7xl font-bold text-white mb-6 animate-fade-in">
                            🌟 <span className="text-yellow-400">SMA Negeri 1</span>
                        </h1>
                        <p className="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto">
                            Membangun generasi unggul dengan pendidikan berkualitas, berkarakter, dan siap menghadapi masa depan
                        </p>
                        <div className="flex flex-col sm:flex-row gap-4 justify-center items-center">
                            <Link href="/ppdb">
                                <Button className="bg-yellow-400 text-black hover:bg-yellow-300 text-lg px-8 py-3 rounded-full transform hover:scale-105 transition-all duration-300 hover:shadow-2xl hover:shadow-yellow-400/50">
                                    📝 Daftar PPDB
                                </Button>
                            </Link>
                            <Link href="/news">
                                <Button variant="outline" className="border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black text-lg px-8 py-3 rounded-full transform hover:scale-105 transition-all duration-300">
                                    📰 Lihat Berita
                                </Button>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>

            {/* Stats Section */}
            <div className="py-16 bg-gradient-to-r from-gray-900 to-black">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                        <div className="bg-black/50 p-6 rounded-lg border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300">
                            <div className="text-3xl font-bold text-yellow-400">1200+</div>
                            <div className="text-gray-300">👨‍🎓 Siswa Aktif</div>
                        </div>
                        <div className="bg-black/50 p-6 rounded-lg border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300">
                            <div className="text-3xl font-bold text-yellow-400">80+</div>
                            <div className="text-gray-300">👨‍🏫 Tenaga Pengajar</div>
                        </div>
                        <div className="bg-black/50 p-6 rounded-lg border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300">
                            <div className="text-3xl font-bold text-yellow-400">25+</div>
                            <div className="text-gray-300">🎯 Ekstrakurikuler</div>
                        </div>
                        <div className="bg-black/50 p-6 rounded-lg border border-yellow-500/20 hover:border-yellow-400/50 transition-all duration-300">
                            <div className="text-3xl font-bold text-yellow-400">15+</div>
                            <div className="text-gray-300">🏆 Prestasi Nasional</div>
                        </div>
                    </div>
                </div>
            </div>

            {/* Latest News */}
            <div className="py-16 bg-black">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center mb-12">
                        <h2 className="text-4xl font-bold text-yellow-400 mb-4">📰 Berita & Pengumuman Terbaru</h2>
                        <p className="text-gray-300 text-lg">Ikuti perkembangan terkini dari sekolah</p>
                    </div>
                    
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        {latestNews.map((news) => (
                            <div key={news.id} className="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 hover:border-yellow-400/50 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-yellow-400/20">
                                <div className="h-48 bg-gradient-to-r from-yellow-400 to-yellow-600 flex items-center justify-center">
                                    <span className="text-4xl">📰</span>
                                </div>
                                <div className="p-6">
                                    <h3 className="text-xl font-semibold text-white mb-2 line-clamp-2">{news.title}</h3>
                                    <p className="text-gray-400 mb-4 line-clamp-3">{news.content.substring(0, 150)}...</p>
                                    <div className="flex items-center justify-between">
                                        <span className="text-sm text-yellow-400">
                                            {new Date(news.published_at).toLocaleDateString('id-ID')}
                                        </span>
                                        <Link href={`/news/${news.slug}`}>
                                            <Button size="sm" className="bg-yellow-400 text-black hover:bg-yellow-300">
                                                Baca Selengkapnya
                                            </Button>
                                        </Link>
                                    </div>
                                </div>
                            </div>
                        ))}
                    </div>

                    <div className="text-center mt-12">
                        <Link href="/news">
                            <Button className="bg-transparent border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-3 rounded-full transition-all duration-300 transform hover:scale-105">
                                📰 Lihat Semua Berita
                            </Button>
                        </Link>
                    </div>
                </div>
            </div>

            {/* Extracurriculars */}
            <div className="py-16 bg-gradient-to-b from-gray-900 to-black">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center mb-12">
                        <h2 className="text-4xl font-bold text-yellow-400 mb-4">🎯 Ekstrakurikuler</h2>
                        <p className="text-gray-300 text-lg">Kembangkan bakat dan minat siswa</p>
                    </div>
                    
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        {extracurriculars.map((ekskul) => (
                            <div key={ekskul.id} className="bg-black/70 rounded-xl p-6 border border-gray-700 hover:border-yellow-400/50 transition-all duration-300 transform hover:-translate-y-2">
                                <div className="text-center mb-4">
                                    <div className="w-16 h-16 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                        <span className="text-2xl">🏆</span>
                                    </div>
                                    <h3 className="text-xl font-semibold text-white">{ekskul.name}</h3>
                                </div>
                                <p className="text-gray-400 text-center line-clamp-3">{ekskul.description.substring(0, 100)}...</p>
                            </div>
                        ))}
                    </div>

                    <div className="text-center mt-12">
                        <Link href="/extracurriculars">
                            <Button className="bg-transparent border-2 border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-8 py-3 rounded-full transition-all duration-300 transform hover:scale-105">
                                🎯 Lihat Semua Ekstrakurikuler
                            </Button>
                        </Link>
                    </div>
                </div>
            </div>

            {/* Quick Actions */}
            <div className="py-16 bg-black">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="text-center mb-12">
                        <h2 className="text-4xl font-bold text-yellow-400 mb-4">⚡ Akses Cepat</h2>
                        <p className="text-gray-300 text-lg">Layanan online untuk kemudahan Anda</p>
                    </div>
                    
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <Link href="/ppdb" className="block">
                            <div className="bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl p-6 text-center hover:from-blue-500 hover:to-blue-700 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                                <div className="text-4xl mb-4">📝</div>
                                <h3 className="text-xl font-semibold text-white mb-2">PPDB Online</h3>
                                <p className="text-blue-100">Daftar sebagai siswa baru</p>
                            </div>
                        </Link>
                        
                        <Link href="/feedback" className="block">
                            <div className="bg-gradient-to-br from-green-600 to-green-800 rounded-xl p-6 text-center hover:from-green-500 hover:to-green-700 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                                <div className="text-4xl mb-4">💬</div>
                                <h3 className="text-xl font-semibold text-white mb-2">Kotak Saran</h3>
                                <p className="text-green-100">Sampaikan saran Anda</p>
                            </div>
                        </Link>
                        
                        <Link href="/gallery" className="block">
                            <div className="bg-gradient-to-br from-purple-600 to-purple-800 rounded-xl p-6 text-center hover:from-purple-500 hover:to-purple-700 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                                <div className="text-4xl mb-4">📸</div>
                                <h3 className="text-xl font-semibold text-white mb-2">Galeri</h3>
                                <p className="text-purple-100">Lihat foto kegiatan</p>
                            </div>
                        </Link>
                        
                        <Link href="/facilities" className="block">
                            <div className="bg-gradient-to-br from-red-600 to-red-800 rounded-xl p-6 text-center hover:from-red-500 hover:to-red-700 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl">
                                <div className="text-4xl mb-4">🏢</div>
                                <h3 className="text-xl font-semibold text-white mb-2">Fasilitas</h3>
                                <p className="text-red-100">Lihat fasilitas sekolah</p>
                            </div>
                        </Link>
                    </div>
                </div>
            </div>

            {/* Footer */}
            <footer className="bg-black border-t border-yellow-500/20 py-12">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="grid grid-cols-1 md:grid-cols-4 gap-8">
                        <div className="col-span-1 md:col-span-2">
                            <h3 className="text-2xl font-bold text-yellow-400 mb-4">🏫 SMA Negeri 1</h3>
                            <p className="text-gray-300 mb-4">
                                Sekolah menengah atas terbaik dengan fasilitas modern dan tenaga pengajar berkualitas.
                                Mempersiapkan generasi masa depan yang unggul dan berkarakter.
                            </p>
                            <div className="flex space-x-4">
                                <span className="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold hover:bg-yellow-300 transition-colors cursor-pointer">f</span>
                                <span className="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold hover:bg-yellow-300 transition-colors cursor-pointer">@</span>
                                <span className="w-10 h-10 bg-yellow-400 rounded-full flex items-center justify-center text-black font-bold hover:bg-yellow-300 transition-colors cursor-pointer">in</span>
                            </div>
                        </div>
                        
                        <div>
                            <h4 className="text-lg font-semibold text-white mb-4">Menu Utama</h4>
                            <ul className="space-y-2">
                                <li><Link href="/about" className="text-gray-300 hover:text-yellow-400 transition-colors">Profil Sekolah</Link></li>
                                <li><Link href="/news" className="text-gray-300 hover:text-yellow-400 transition-colors">Berita</Link></li>
                                <li><Link href="/extracurriculars" className="text-gray-300 hover:text-yellow-400 transition-colors">Ekstrakurikuler</Link></li>
                                <li><Link href="/gallery" className="text-gray-300 hover:text-yellow-400 transition-colors">Galeri</Link></li>
                            </ul>
                        </div>
                        
                        <div>
                            <h4 className="text-lg font-semibold text-white mb-4">Kontak</h4>
                            <ul className="space-y-2 text-gray-300">
                                <li>📍 Jl. Pendidikan No. 123, Jakarta</li>
                                <li>📞 (021) 1234-5678</li>
                                <li>✉️ info@sman1.sch.id</li>
                                <li>🌐 www.sman1.sch.id</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div className="border-t border-gray-800 mt-8 pt-8 text-center">
                        <p className="text-gray-400">© 2024 SMA Negeri 1. Semua hak cipta dilindungi.</p>
                    </div>
                </div>
            </footer>
        </div>
    );
}