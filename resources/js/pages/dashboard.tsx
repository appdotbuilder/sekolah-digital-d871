import React from 'react';
import { usePage } from '@inertiajs/react';
import AppLayout from '@/layouts/app-layout';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/react';

interface User {
    id: number;
    name: string;
    email: string;
    role: string;
}

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

export default function Dashboard() {
    const { auth } = usePage<{ auth: { user: User } }>().props;

    const stats = [
        { name: 'Total Siswa', value: '1,234', icon: '👨‍🎓', color: 'bg-blue-500' },
        { name: 'Tenaga Pengajar', value: '89', icon: '👨‍🏫', color: 'bg-green-500' },
        { name: 'Berita Aktif', value: '45', icon: '📰', color: 'bg-purple-500' },
        { name: 'Pendaftar PPDB', value: '156', icon: '📝', color: 'bg-yellow-500' },
        { name: 'Saran Masuk', value: '12', icon: '💬', color: 'bg-red-500' },
        { name: 'Ekstrakurikuler', value: '24', icon: '🎯', color: 'bg-indigo-500' },
    ];

    const recentActivities = [
        { type: 'PPDB', message: 'Pendaftaran baru dari Ahmad Rizki', time: '2 menit yang lalu' },
        { type: 'Berita', message: 'Berita "Lomba Matematika" dipublikasi', time: '15 menit yang lalu' },
        { type: 'Saran', message: 'Saran baru dari orang tua siswa', time: '1 jam yang lalu' },
        { type: 'Galeri', message: 'Foto kegiatan pramuka ditambahkan', time: '2 jam yang lalu' },
    ];

    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Dashboard SMA Negeri 1" />
            <div className="p-6 space-y-8">
                <div className="flex items-center justify-between">
                    <div>
                        <h1 className="text-3xl font-bold text-gray-900 dark:text-gray-100">
                            🏫 Dashboard SMA Negeri 1
                        </h1>
                        <p className="mt-2 text-sm text-gray-600 dark:text-gray-400">
                            Selamat datang kembali, <span className="font-semibold">{auth.user.name}</span> ({auth.user.role})
                        </p>
                    </div>
                    <div className="text-sm text-gray-500">
                        {new Date().toLocaleDateString('id-ID', {
                            weekday: 'long',
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        })}
                    </div>
                </div>

                {/* Stats Grid */}
                <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {stats.map((stat) => (
                        <div key={stat.name} className="bg-white dark:bg-gray-800 overflow-hidden shadow rounded-lg border border-sidebar-border/70 dark:border-sidebar-border">
                            <div className="p-5">
                                <div className="flex items-center">
                                    <div className="flex-shrink-0">
                                        <div className={`w-8 h-8 ${stat.color} rounded-md flex items-center justify-center text-white text-lg`}>
                                            {stat.icon}
                                        </div>
                                    </div>
                                    <div className="ml-5 w-0 flex-1">
                                        <dl>
                                            <dt className="text-sm font-medium text-gray-500 dark:text-gray-400 truncate">
                                                {stat.name}
                                            </dt>
                                            <dd className="text-3xl font-semibold text-gray-900 dark:text-gray-100">
                                                {stat.value}
                                            </dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>

                {/* Main Content Grid */}
                <div className="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    {/* Recent Activity */}
                    <div className="bg-white dark:bg-gray-800 shadow rounded-lg border border-sidebar-border/70 dark:border-sidebar-border">
                        <div className="px-4 py-5 sm:p-6">
                            <h3 className="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                                📈 Aktivitas Terbaru
                            </h3>
                            <div className="space-y-4">
                                {recentActivities.map((activity, index) => (
                                    <div key={index} className="flex items-start space-x-3">
                                        <div className="flex-shrink-0">
                                            <span className={`inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ${
                                                activity.type === 'PPDB' ? 'bg-blue-100 text-blue-800 dark:bg-blue-800 dark:text-blue-100' :
                                                activity.type === 'Berita' ? 'bg-green-100 text-green-800 dark:bg-green-800 dark:text-green-100' :
                                                activity.type === 'Saran' ? 'bg-yellow-100 text-yellow-800 dark:bg-yellow-800 dark:text-yellow-100' :
                                                'bg-purple-100 text-purple-800 dark:bg-purple-800 dark:text-purple-100'
                                            }`}>
                                                {activity.type}
                                            </span>
                                        </div>
                                        <div className="flex-1 min-w-0">
                                            <p className="text-sm text-gray-900 dark:text-gray-100">
                                                {activity.message}
                                            </p>
                                            <p className="text-xs text-gray-500 dark:text-gray-400 mt-1">
                                                {activity.time}
                                            </p>
                                        </div>
                                    </div>
                                ))}
                            </div>
                        </div>
                    </div>

                    {/* Quick Actions */}
                    <div className="bg-white dark:bg-gray-800 shadow rounded-lg border border-sidebar-border/70 dark:border-sidebar-border">
                        <div className="px-4 py-5 sm:p-6">
                            <h3 className="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                                ⚡ Aksi Cepat
                            </h3>
                            <div className="grid grid-cols-2 gap-4">
                                <button className="flex flex-col items-center p-4 bg-blue-50 dark:bg-blue-900/20 rounded-lg hover:bg-blue-100 dark:hover:bg-blue-900/40 transition-colors">
                                    <span className="text-2xl mb-2">📝</span>
                                    <span className="text-sm font-medium text-gray-900 dark:text-gray-100">Kelola PPDB</span>
                                </button>
                                <button className="flex flex-col items-center p-4 bg-green-50 dark:bg-green-900/20 rounded-lg hover:bg-green-100 dark:hover:bg-green-900/40 transition-colors">
                                    <span className="text-2xl mb-2">📰</span>
                                    <span className="text-sm font-medium text-gray-900 dark:text-gray-100">Posting Berita</span>
                                </button>
                                <button className="flex flex-col items-center p-4 bg-purple-50 dark:bg-purple-900/20 rounded-lg hover:bg-purple-100 dark:hover:bg-purple-900/40 transition-colors">
                                    <span className="text-2xl mb-2">💬</span>
                                    <span className="text-sm font-medium text-gray-900 dark:text-gray-100">Lihat Saran</span>
                                </button>
                                <button className="flex flex-col items-center p-4 bg-yellow-50 dark:bg-yellow-900/20 rounded-lg hover:bg-yellow-100 dark:hover:bg-yellow-900/40 transition-colors">
                                    <span className="text-2xl mb-2">📸</span>
                                    <span className="text-sm font-medium text-gray-900 dark:text-gray-100">Upload Galeri</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Website Status */}
                <div className="bg-white dark:bg-gray-800 shadow rounded-lg border border-sidebar-border/70 dark:border-sidebar-border">
                    <div className="px-4 py-5 sm:p-6">
                        <h3 className="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                            🌐 Status Website
                        </h3>
                        <div className="grid grid-cols-1 md:grid-cols-4 gap-4">
                            <div className="text-center">
                                <div className="text-2xl text-green-500 mb-1">✅</div>
                                <div className="text-sm text-gray-500 dark:text-gray-400">Website Online</div>
                            </div>
                            <div className="text-center">
                                <div className="text-2xl text-blue-500 mb-1">👥</div>
                                <div className="text-sm text-gray-500 dark:text-gray-400">245 Pengunjung Hari Ini</div>
                            </div>
                            <div className="text-center">
                                <div className="text-2xl text-purple-500 mb-1">📱</div>
                                <div className="text-sm text-gray-500 dark:text-gray-400">Mobile Responsive</div>
                            </div>
                            <div className="text-center">
                                <div className="text-2xl text-yellow-500 mb-1">⚡</div>
                                <div className="text-sm text-gray-500 dark:text-gray-400">Loading: 1.2s</div>
                            </div>
                        </div>
                    </div>
                </div>

                {/* Footer Info */}
                <div className="text-center text-sm text-gray-500 dark:text-gray-400">
                    <p>Dashboard SMA Negeri 1 - Sistem Informasi Sekolah Terintegrasi</p>
                    <p className="mt-1">Terakhir diperbarui: {new Date().toLocaleString('id-ID')}</p>
                </div>
            </div>
        </AppLayout>
    );
}