import React from 'react';
import { Link, useForm } from '@inertiajs/react';
import { Button } from '@/components/ui/button';

interface PpdbFormData {
    name: string;
    dob: string;
    address: string;
    previous_school: string;
    parent_contact: string;
    [key: string]: string;
}

export default function CreatePpdb() {
    const { data, setData, post, processing, errors } = useForm<PpdbFormData>({
        name: '',
        dob: '',
        address: '',
        previous_school: '',
        parent_contact: '',
    });

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        post('/ppdb');
    };

    return (
        <div className="min-h-screen bg-black text-white">
            {/* Navigation */}
            <nav className="bg-black shadow-lg border-b border-yellow-500/20">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div className="flex items-center justify-between h-16">
                        <Link href="/" className="flex items-center">
                            <h1 className="text-2xl font-bold text-yellow-400">🏫 SMA Negeri 1</h1>
                        </Link>
                        
                        <div className="flex items-center space-x-4">
                            <Link href="/">
                                <Button variant="outline" className="border-yellow-400 text-yellow-400 hover:bg-yellow-400 hover:text-black">
                                    ← Kembali ke Beranda
                                </Button>
                            </Link>
                        </div>
                    </div>
                </div>
            </nav>

            {/* Hero Section */}
            <div className="bg-gradient-to-b from-gray-900 to-black py-16">
                <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h1 className="text-5xl font-bold text-yellow-400 mb-6">📝 Pendaftaran Peserta Didik Baru</h1>
                    <p className="text-xl text-gray-300 max-w-2xl mx-auto">
                        Bergabunglah dengan keluarga besar SMA Negeri 1 dan wujudkan impian pendidikan terbaik Anda
                    </p>
                </div>
            </div>

            {/* Form Section */}
            <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div className="bg-gray-900 rounded-xl p-8 border border-yellow-500/20">
                    <div className="mb-8">
                        <h2 className="text-3xl font-bold text-yellow-400 mb-4">📋 Formulir Pendaftaran</h2>
                        <p className="text-gray-300">
                            Mohon lengkapi semua data dengan benar. Setelah mengirim formulir, kami akan menghubungi Anda 
                            dalam 1x24 jam untuk informasi selanjutnya.
                        </p>
                    </div>

                    <form onSubmit={handleSubmit} className="space-y-6">
                        <div>
                            <label htmlFor="name" className="block text-sm font-medium text-yellow-400 mb-2">
                                Nama Lengkap *
                            </label>
                            <input
                                type="text"
                                id="name"
                                value={data.name}
                                onChange={(e) => setData('name', e.target.value)}
                                className="w-full px-4 py-3 bg-black border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-colors"
                                placeholder="Masukkan nama lengkap sesuai akta kelahiran"
                                required
                            />
                            {errors.name && <div className="text-red-400 text-sm mt-1">{errors.name}</div>}
                        </div>

                        <div>
                            <label htmlFor="dob" className="block text-sm font-medium text-yellow-400 mb-2">
                                Tanggal Lahir *
                            </label>
                            <input
                                type="date"
                                id="dob"
                                value={data.dob}
                                onChange={(e) => setData('dob', e.target.value)}
                                className="w-full px-4 py-3 bg-black border border-gray-600 rounded-lg text-white focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-colors"
                                required
                            />
                            {errors.dob && <div className="text-red-400 text-sm mt-1">{errors.dob}</div>}
                        </div>

                        <div>
                            <label htmlFor="address" className="block text-sm font-medium text-yellow-400 mb-2">
                                Alamat Lengkap *
                            </label>
                            <textarea
                                id="address"
                                value={data.address}
                                onChange={(e) => setData('address', e.target.value)}
                                rows={4}
                                className="w-full px-4 py-3 bg-black border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-colors resize-none"
                                placeholder="Masukkan alamat lengkap termasuk RT/RW, kelurahan, kecamatan, kota/kabupaten"
                                required
                            />
                            {errors.address && <div className="text-red-400 text-sm mt-1">{errors.address}</div>}
                        </div>

                        <div>
                            <label htmlFor="previous_school" className="block text-sm font-medium text-yellow-400 mb-2">
                                Asal Sekolah *
                            </label>
                            <input
                                type="text"
                                id="previous_school"
                                value={data.previous_school}
                                onChange={(e) => setData('previous_school', e.target.value)}
                                className="w-full px-4 py-3 bg-black border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-colors"
                                placeholder="Nama SMP/MTs asal"
                                required
                            />
                            {errors.previous_school && <div className="text-red-400 text-sm mt-1">{errors.previous_school}</div>}
                        </div>

                        <div>
                            <label htmlFor="parent_contact" className="block text-sm font-medium text-yellow-400 mb-2">
                                Nomor Telepon Orang Tua *
                            </label>
                            <input
                                type="tel"
                                id="parent_contact"
                                value={data.parent_contact}
                                onChange={(e) => setData('parent_contact', e.target.value)}
                                className="w-full px-4 py-3 bg-black border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-colors"
                                placeholder="Contoh: 08123456789"
                                required
                            />
                            {errors.parent_contact && <div className="text-red-400 text-sm mt-1">{errors.parent_contact}</div>}
                        </div>

                        {/* Information Box */}
                        <div className="bg-blue-900/50 border border-blue-400/50 rounded-lg p-4">
                            <div className="flex items-start">
                                <div className="text-blue-400 text-xl mr-3">ℹ️</div>
                                <div>
                                    <h4 className="text-blue-400 font-semibold mb-2">Persyaratan PPDB:</h4>
                                    <ul className="text-blue-100 text-sm space-y-1">
                                        <li>• Lulusan SMP/MTs/sederajat</li>
                                        <li>• Memiliki ijazah atau surat keterangan lulus</li>
                                        <li>• Usia maksimal 21 tahun pada 1 Juli tahun pelajaran berjalan</li>
                                        <li>• Sehat jasmani dan rohani</li>
                                        <li>• Melengkapi berkas yang dipersyaratkan</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div className="flex flex-col sm:flex-row gap-4 pt-6">
                            <Button
                                type="submit"
                                disabled={processing}
                                className="flex-1 bg-yellow-400 text-black hover:bg-yellow-300 py-4 text-lg font-semibold rounded-full transform hover:scale-105 transition-all duration-300 disabled:opacity-50 disabled:transform-none"
                            >
                                {processing ? (
                                    <>
                                        <span className="animate-spin mr-2">⏳</span>
                                        Mengirim...
                                    </>
                                ) : (
                                    <>📝 Kirim Pendaftaran</>
                                )}
                            </Button>
                            <Link href="/" className="flex-1">
                                <Button 
                                    type="button"
                                    variant="outline" 
                                    className="w-full border-gray-600 text-gray-300 hover:bg-gray-800 py-4 text-lg rounded-full transition-all duration-300"
                                >
                                    ❌ Batal
                                </Button>
                            </Link>
                        </div>
                    </form>
                </div>

                {/* Additional Information */}
                <div className="mt-12 grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div className="bg-gradient-to-br from-green-900 to-green-800 rounded-xl p-6 border border-green-400/50">
                        <h3 className="text-xl font-bold text-green-400 mb-4">📞 Butuh Bantuan?</h3>
                        <div className="text-green-100 space-y-2">
                            <p>Hubungi kami jika ada pertanyaan:</p>
                            <p>📱 WhatsApp: 0812-3456-7890</p>
                            <p>📧 Email: ppdb@sman1.sch.id</p>
                            <p>🕒 Jam operasional: 08.00 - 16.00 WIB</p>
                        </div>
                    </div>

                    <div className="bg-gradient-to-br from-purple-900 to-purple-800 rounded-xl p-6 border border-purple-400/50">
                        <h3 className="text-xl font-bold text-purple-400 mb-4">📅 Jadwal Penting</h3>
                        <div className="text-purple-100 space-y-2">
                            <p>📝 Pendaftaran: 1 - 30 Juni 2024</p>
                            <p>📋 Seleksi Berkas: 1 - 7 Juli 2024</p>
                            <p>📊 Pengumuman: 15 Juli 2024</p>
                            <p>🎒 Daftar Ulang: 16 - 20 Juli 2024</p>
                        </div>
                    </div>
                </div>
            </div>

            {/* Footer */}
            <footer className="bg-black border-t border-yellow-500/20 py-8">
                <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <p className="text-gray-400">© 2024 SMA Negeri 1. Semua hak cipta dilindungi.</p>
                </div>
            </footer>
        </div>
    );
}