import React from 'react';
import { Link } from '@inertiajs/react';
import { Button } from '@/components/ui/button';

interface News {
    id: number;
    title: string;
    slug: string;
    content: string;
    image: string | null;
    published_at: string;
}

interface PaginationLink {
    url: string | null;
    label: string;
    active: boolean;
}

interface PaginatedNews {
    data: News[];
    links: PaginationLink[];
    current_page: number;
    last_page: number;
    per_page: number;
    total: number;
}

interface Props {
    news: PaginatedNews;
    [key: string]: unknown;
}

export default function NewsIndex({ news }: Props) {
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
                                <Link href="/news" className="text-yellow-400 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
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
                    <h1 className="text-5xl font-bold text-yellow-400 mb-6">📰 Berita & Pengumuman</h1>
                    <p className="text-xl text-gray-300 max-w-2xl mx-auto">
                        Ikuti perkembangan terkini dan informasi penting dari SMA Negeri 1
                    </p>
                </div>
            </div>

            {/* News Grid */}
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                {news.data.length === 0 ? (
                    <div className="text-center py-12">
                        <div className="text-6xl mb-4">📰</div>
                        <h3 className="text-2xl font-semibold text-yellow-400 mb-2">Belum Ada Berita</h3>
                        <p className="text-gray-400">Berita dan pengumuman akan segera ditampilkan di sini.</p>
                    </div>
                ) : (
                    <>
                        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                            {news.data.map((article) => (
                                <article key={article.id} className="bg-gray-900 rounded-xl overflow-hidden border border-gray-700 hover:border-yellow-400/50 transition-all duration-300 transform hover:-translate-y-2 hover:shadow-2xl hover:shadow-yellow-400/20">
                                    <div className="h-48 bg-gradient-to-r from-yellow-400 to-yellow-600 flex items-center justify-center">
                                        <span className="text-4xl">📰</span>
                                    </div>
                                    <div className="p-6">
                                        <h2 className="text-xl font-semibold text-white mb-3 line-clamp-2">
                                            {article.title}
                                        </h2>
                                        <p className="text-gray-400 mb-4 line-clamp-3">
                                            {article.content.substring(0, 150)}...
                                        </p>
                                        <div className="flex items-center justify-between">
                                            <time className="text-sm text-yellow-400">
                                                {new Date(article.published_at).toLocaleDateString('id-ID', {
                                                    year: 'numeric',
                                                    month: 'long',
                                                    day: 'numeric'
                                                })}
                                            </time>
                                            <Link href={`/news/${article.slug}`}>
                                                <Button size="sm" className="bg-yellow-400 text-black hover:bg-yellow-300 transform hover:scale-105 transition-all duration-300">
                                                    Baca Selengkapnya
                                                </Button>
                                            </Link>
                                        </div>
                                    </div>
                                </article>
                            ))}
                        </div>

                        {/* Pagination */}
                        {news.last_page > 1 && (
                            <div className="mt-12 flex justify-center">
                                <nav className="flex items-center space-x-2">
                                    {news.links.map((link, index) => {
                                        if (!link.url) {
                                            return (
                                                <span
                                                    key={index}
                                                    className="px-3 py-2 text-gray-500 cursor-not-allowed"
                                                    dangerouslySetInnerHTML={{ __html: link.label }}
                                                />
                                            );
                                        }

                                        return (
                                            <Link
                                                key={index}
                                                href={link.url}
                                                className={`px-3 py-2 rounded-md transition-colors ${
                                                    link.active
                                                        ? 'bg-yellow-400 text-black font-semibold'
                                                        : 'text-yellow-400 hover:bg-yellow-400/10'
                                                }`}
                                                dangerouslySetInnerHTML={{ __html: link.label }}
                                            />
                                        );
                                    })}
                                </nav>
                            </div>
                        )}

                        {/* Statistics */}
                        <div className="mt-12 text-center">
                            <p className="text-gray-400">
                                Menampilkan {news.data.length} dari {news.total} berita
                                {news.current_page > 1 && ` (Halaman ${news.current_page} dari ${news.last_page})`}
                            </p>
                        </div>
                    </>
                )}

                {/* Quick Actions */}
                <div className="mt-16 bg-gradient-to-r from-gray-900 to-black rounded-xl p-8 border border-yellow-500/20">
                    <div className="text-center">
                        <h2 className="text-2xl font-bold text-yellow-400 mb-4">🔔 Jangan Lewatkan Informasi Penting</h2>
                        <p className="text-gray-300 mb-6">
                            Dapatkan update berita dan pengumuman terbaru langsung ke ponsel Anda
                        </p>
                        <div className="flex flex-col sm:flex-row gap-4 justify-center">
                            <a 
                                href="https://wa.me/628123456789" 
                                target="_blank" 
                                rel="noopener noreferrer"
                            >
                                <Button className="bg-green-600 text-white hover:bg-green-500 px-6 py-3 rounded-full transform hover:scale-105 transition-all duration-300">
                                    💬 Subscribe WhatsApp
                                </Button>
                            </a>
                            <Link href="/contact">
                                <Button variant="outline" className="border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black px-6 py-3 rounded-full transform hover:scale-105 transition-all duration-300">
                                    📞 Hubungi Kami
                                </Button>
                            </Link>
                        </div>
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