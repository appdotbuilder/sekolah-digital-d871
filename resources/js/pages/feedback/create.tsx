import React from 'react';
import { Link, useForm } from '@inertiajs/react';
import { Button } from '@/components/ui/button';

interface FeedbackFormData {
    message: string;
    [key: string]: string;
}

export default function CreateFeedback() {
    const { data, setData, post, processing, errors } = useForm<FeedbackFormData>({
        message: '',
    });

    const handleSubmit = (e: React.FormEvent) => {
        e.preventDefault();
        post('/feedback');
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
                    <h1 className="text-5xl font-bold text-yellow-400 mb-6">💬 Kotak Saran</h1>
                    <p className="text-xl text-gray-300 max-w-2xl mx-auto">
                        Sampaikan saran, kritik, atau masukan Anda untuk kemajuan SMA Negeri 1
                    </p>
                </div>
            </div>

            {/* Form Section */}
            <div className="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
                <div className="bg-gray-900 rounded-xl p-8 border border-yellow-500/20">
                    <div className="mb-8">
                        <h2 className="text-3xl font-bold text-yellow-400 mb-4">📝 Formulir Saran</h2>
                        <p className="text-gray-300">
                            Saran dan masukan Anda sangat berharga untuk perbaikan dan kemajuan sekolah. 
                            Semua feedback akan ditinjau dan ditanggapi oleh tim manajemen sekolah.
                        </p>
                    </div>

                    <form onSubmit={handleSubmit} className="space-y-6">
                        <div>
                            <label htmlFor="message" className="block text-sm font-medium text-yellow-400 mb-2">
                                Pesan Saran *
                            </label>
                            <textarea
                                id="message"
                                value={data.message}
                                onChange={(e) => setData('message', e.target.value)}
                                rows={8}
                                className="w-full px-4 py-3 bg-black border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:border-yellow-400 focus:ring-1 focus:ring-yellow-400 transition-colors resize-none"
                                placeholder="Tuliskan saran, kritik, atau masukan Anda di sini... (minimal 10 karakter)"
                                required
                                minLength={10}
                                maxLength={1000}
                            />
                            {errors.message && <div className="text-red-400 text-sm mt-1">{errors.message}</div>}
                            <div className="text-sm text-gray-400 mt-1">
                                {data.message.length}/1000 karakter
                            </div>
                        </div>

                        {/* Guidelines */}
                        <div className="bg-blue-900/50 border border-blue-400/50 rounded-lg p-4">
                            <div className="flex items-start">
                                <div className="text-blue-400 text-xl mr-3">💡</div>
                                <div>
                                    <h4 className="text-blue-400 font-semibold mb-2">Tips Menyampaikan Saran:</h4>
                                    <ul className="text-blue-100 text-sm space-y-1">
                                        <li>• Gunakan bahasa yang sopan dan konstruktif</li>
                                        <li>• Jelaskan masalah atau area yang perlu diperbaiki</li>
                                        <li>• Berikan solusi atau rekomendasi jika memungkinkan</li>
                                        <li>• Sertakan detail yang spesifik dan dapat ditindaklanjuti</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div className="flex flex-col sm:flex-row gap-4 pt-6">
                            <Button
                                type="submit"
                                disabled={processing || data.message.length < 10}
                                className="flex-1 bg-yellow-400 text-black hover:bg-yellow-300 py-4 text-lg font-semibold rounded-full transform hover:scale-105 transition-all duration-300 disabled:opacity-50 disabled:transform-none"
                            >
                                {processing ? (
                                    <>
                                        <span className="animate-spin mr-2">⏳</span>
                                        Mengirim...
                                    </>
                                ) : (
                                    <>💬 Kirim Saran</>
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
                        <h3 className="text-xl font-bold text-green-400 mb-4">📞 Kontak Langsung</h3>
                        <div className="text-green-100 space-y-2">
                            <p>Jika perlu respon segera:</p>
                            <p>📱 WhatsApp: 0812-3456-7890</p>
                            <p>📧 Email: info@sman1.sch.id</p>
                            <p>🕒 Jam operasional: 08.00 - 16.00 WIB</p>
                        </div>
                    </div>

                    <div className="bg-gradient-to-br from-purple-900 to-purple-800 rounded-xl p-6 border border-purple-400/50">
                        <h3 className="text-xl font-bold text-purple-400 mb-4">🔒 Privasi</h3>
                        <div className="text-purple-100 space-y-2">
                            <p>• Identitas Anda akan dijaga kerahasiaan</p>
                            <p>• Saran akan ditinjau oleh tim manajemen</p>
                            <p>• Respons akan diberikan dalam 3-5 hari kerja</p>
                            <p>• Tidak ada saran yang diabaikan</p>
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