@extends('layouts.admin')

@section('page-title', 'Dashboard')

@section('content')
<div class="p-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <!-- Card 1 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Total Berita</p> 
                    <p class="text-3xl font-bold text-gray-800">245</p>
                </div>
                <div class="bg-blue-100 rounded-full p-3">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                    </svg>
                </div>
            </div>
            <p class="text-sm text-green-600 mt-2">↑ 12% dari bulan lalu</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Total Layanan</p>
                    <p class="text-3xl font-bold text-gray-800">58</p>
                </div>
                <div class="bg-green-100 rounded-full p-3">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                </div>
            </div>
            <p class="text-sm text-green-600 mt-2">↑ 8% dari bulan lalu</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Pengunjung</p>
                    <p class="text-3xl font-bold text-gray-800">12.5K</p>
                </div>
                <div class="bg-yellow-100 rounded-full p-3">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
            </div>
            <p class="text-sm text-green-600 mt-2">↑ 23% dari bulan lalu</p>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-600 mb-1">Draft</p>
                    <p class="text-3xl font-bold text-gray-800">18</p>
                </div>
                <div class="bg-red-100 rounded-full p-3">
                    <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
            </div>
            <p class="text-sm text-red-600 mt-2">↓ 3% dari bulan lalu</p>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Aktivitas Terbaru</h2>
        <div class="space-y-4">
            <div class="flex items-center justify-between py-3 border-b border-gray-200">
                <div class="flex items-center space-x-4">
                    <div class="bg-blue-100 rounded-full p-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-800">Berita baru ditambahkan</p>
                        <p class="text-xs text-gray-500">2 jam yang lalu</p>
                    </div>
                </div>
                <span class="text-xs text-gray-500">Admin</span>
            </div>

            <div class="flex items-center justify-between py-3 border-b border-gray-200">
                <div class="flex items-center space-x-4">
                    <div class="bg-green-100 rounded-full p-2">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-800">Layanan diperbarui</p>
                        <p class="text-xs text-gray-500">5 jam yang lalu</p>
                    </div>
                </div>
                <span class="text-xs text-gray-500">Admin</span>
            </div>

            <div class="flex items-center justify-between py-3">
                <div class="flex items-center space-x-4">
                    <div class="bg-yellow-100 rounded-full p-2">
                        <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-gray-800">Komentar baru pada berita</p>
                        <p class="text-xs text-gray-500">1 hari yang lalu</p>
                    </div>
                </div>
                <span class="text-xs text-gray-500">Pengunjung</span>
            </div>
        </div>
    </div>
</div>
@endsection