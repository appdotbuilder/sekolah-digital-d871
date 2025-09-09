import React from 'react';
import { Link } from '@inertiajs/react';
import { Button } from '@/components/ui/button';

export default function About() {
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
                                <Link href="/about" className="text-yellow-400 hover:text-white px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-yellow-400/10">
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
                    <h1 className="text-5xl font-bold text-yellow-400 mb-6">🏫 Profil SMA Negeri 1</h1>
                    <p className="text-xl text-gray-300 max-w-3xl mx-auto">
                        Mengenal lebih dekat sekolah menengah atas terbaik dengan tradisi keunggulan akademik dan pembentukan karakter
                    </p>
                </div>
            </div>

            {/* Content */}
            <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-16">
                    <div>
                        <h2 className="text-3xl font-bold text-yellow-400 mb-6">📚 Sejarah Sekolah</h2>
                        <div className="space-y-4 text-gray-300">
                            <p>
                                SMA Negeri 1 didirikan pada tahun 1985 sebagai respons terhadap kebutuhan pendidikan menengah yang berkualitas di wilayah Jakarta. 
                                Sejak awal berdirinya, sekolah ini berkomitmen untuk memberikan pendidikan terbaik dengan standar nasional dan internasional.
                            </p>
                            <p>
                                Selama lebih dari 35 tahun, SMA Negeri 1 telah meluluskan ribuan siswa yang berhasil melanjutkan ke perguruan tinggi terbaik 
                                di Indonesia maupun luar negeri. Prestasi akademik dan non-akademik yang gemilang menjadi bukti konsistensi sekolah dalam 
                                menghasilkan lulusan berkualitas.
                            </p>
                            <p>
                                Dengan fasilitas modern dan tenaga pengajar berpengalaman, SMA Negeri 1 terus berinovasi dalam metode pembelajaran 
                                untuk mempersiapkan siswa menghadapi tantangan abad ke-21.
                            </p>
                        </div>
                    </div>
                    <div className="bg-gradient-to-br from-yellow-400 to-yellow-600 rounded-xl p-8 text-center">
                        <div className="text-6xl mb-4">🏆</div>
                        <h3 className="text-2xl font-bold text-black mb-4">35+ Tahun</h3>
                        <p className="text-black">Melayani pendidikan berkualitas</p>
                    </div>
                </div>

                {/* Vision & Mission */}
                <div className="mb-16">
                    <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
                        <div className="bg-gray-900 rounded-xl p-8 border border-yellow-500/20">
                            <h3 className="text-2xl font-bold text-yellow-400 mb-6 flex items-center">
                                🎯 Visi
                            </h3>
                            <p className="text-gray-300 text-lg leading-relaxed">
                                Menjadi sekolah menengah atas unggul yang menghasilkan lulusan berkarakter, berprestasi, 
                                dan siap menghadapi tantangan global dengan tetap menjunjung tinggi nilai-nilai budaya bangsa.
                            </p>
                        </div>

                        <div className="bg-gray-900 rounded-xl p-8 border border-yellow-500/20">
                            <h3 className="text-2xl font-bold text-yellow-400 mb-6 flex items-center">
                                🚀 Misi
                            </h3>
                            <ul className="text-gray-300 space-y-3">
                                <li className="flex items-start">
                                    <span className="text-yellow-400 mr-2">•</span>
                                    Menyelenggarakan pendidikan berkualitas dengan kurikulum yang relevan dan inovatif
                                </li>
                                <li className="flex items-start">
                                    <span className="text-yellow-400 mr-2">•</span>
                                    Mengembangkan potensi akademik dan non-akademik siswa secara optimal
                                </li>
                                <li className="flex items-start">
                                    <span className="text-yellow-400 mr-2">•</span>
                                    Membangun karakter siswa yang berakhlak mulia dan berjiwa nasionalis
                                </li>
                                <li className="flex items-start">
                                    <span className="text-yellow-400 mr-2">•</span>
                                    Menciptakan lingkungan belajar yang kondusif dan berbasis teknologi
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                {/* Achievements */}
                <div className="mb-16">
                    <h2 className="text-3xl font-bold text-yellow-400 mb-8 text-center">🏆 Prestasi Sekolah</h2>
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div className="bg-gradient-to-br from-blue-600 to-blue-800 rounded-xl p-6 text-center">
                            <div className="text-3xl mb-4">🥇</div>
                            <h4 className="font-bold text-white mb-2">Juara 1 OSN Matematika</h4>
                            <p className="text-blue-100 text-sm">Tingkat Nasional 2023</p>
                        </div>
                        <div className="bg-gradient-to-br from-green-600 to-green-800 rounded-xl p-6 text-center">
                            <div className="text-3xl mb-4">🥈</div>
                            <h4 className="font-bold text-white mb-2">Juara 2 Lomba Debat</h4>
                            <p className="text-green-100 text-sm">Tingkat Provinsi 2023</p>
                        </div>
                        <div className="bg-gradient-to-br from-purple-600 to-purple-800 rounded-xl p-6 text-center">
                            <div className="text-3xl mb-4">🏆</div>
                            <h4 className="font-bold text-white mb-2">Sekolah Adiwiyata</h4>
                            <p className="text-purple-100 text-sm">Tingkat Nasional 2022</p>
                        </div>
                        <div className="bg-gradient-to-br from-red-600 to-red-800 rounded-xl p-6 text-center">
                            <div className="text-3xl mb-4">⭐</div>
                            <h4 className="font-bold text-white mb-2">Akreditasi A</h4>
                            <p className="text-red-100 text-sm">Dari BAN-SM 2023</p>
                        </div>
                    </div>
                </div>

                {/* Leadership */}
                <div className="mb-16">
                    <h2 className="text-3xl font-bold text-yellow-400 mb-8 text-center">👥 Struktur Organisasi</h2>
                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <div className="bg-gray-900 rounded-xl p-6 text-center border border-yellow-500/20">
                            <div className="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span className="text-3xl text-black">👨‍💼</span>
                            </div>
                            <h4 className="font-bold text-white text-lg mb-2">Drs. Ahmad Wijaya, M.Pd</h4>
                            <p className="text-yellow-400 mb-2">Kepala Sekolah</p>
                            <p className="text-gray-400 text-sm">Memimpin sekolah dengan visi pendidikan yang inovatif dan berkelanjutan</p>
                        </div>

                        <div className="bg-gray-900 rounded-xl p-6 text-center border border-yellow-500/20">
                            <div className="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span className="text-3xl text-black">👩‍🏫</span>
                            </div>
                            <h4 className="font-bold text-white text-lg mb-2">Dr. Siti Nurhaliza, S.Pd</h4>
                            <p className="text-yellow-400 mb-2">Wakil Kepala Sekolah</p>
                            <p className="text-gray-400 text-sm">Mengawasi bidang akademik dan pengembangan kurikulum</p>
                        </div>

                        <div className="bg-gray-900 rounded-xl p-6 text-center border border-yellow-500/20">
                            <div className="w-20 h-20 bg-yellow-400 rounded-full flex items-center justify-center mx-auto mb-4">
                                <span className="text-3xl text-black">👨‍🔬</span>
                            </div>
                            <h4 className="font-bold text-white text-lg mb-2">Prof. Bambang Sutrisno</h4>
                            <p className="text-yellow-400 mb-2">Kepala Laboratorium</p>
                            <p className="text-gray-400 text-sm">Mengelola fasilitas laboratorium dan penelitian siswa</p>
                        </div>
                    </div>
                </div>

                {/* CTA Section */}
                <div className="bg-gradient-to-r from-yellow-400 to-yellow-600 rounded-xl p-12 text-center text-black">
                    <h2 className="text-3xl font-bold mb-4">🎓 Bergabunglah dengan Keluarga Besar SMA Negeri 1</h2>
                    <p className="text-xl mb-8 max-w-2xl mx-auto">
                        Wujudkan impian pendidikan terbaik untuk masa depan yang gemilang. Daftarkan diri Anda sekarang!
                    </p>
                    <div className="flex flex-col sm:flex-row gap-4 justify-center">
                        <Link href="/ppdb">
                            <Button className="bg-black text-yellow-400 hover:bg-gray-800 px-8 py-3 rounded-full text-lg transform hover:scale-105 transition-all duration-300">
                                📝 Daftar PPDB Sekarang
                            </Button>
                        </Link>
                        <Link href="/contact">
                            <Button variant="outline" className="border-black text-black hover:bg-black hover:text-yellow-400 px-8 py-3 rounded-full text-lg transform hover:scale-105 transition-all duration-300">
                                📞 Hubungi Kami
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