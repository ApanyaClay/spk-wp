@extends('layouts.app')

@section('content')
<div class="bg-pink-50 min-h-screen py-20 px-6">
    <div class="max-w-5xl mx-auto text-center">
        <h1 class="text-5xl font-extrabold text-pink-600 mb-4">SPK Skincare</h1>
        <p class="text-lg text-gray-700 mb-8">Temukan skincare terbaik berdasarkan jenis kulitmu: berminyak, kering, normal, atau berjerawat.</p>
    </div>

    <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
            <h3 class="text-xl font-bold text-pink-600 mb-2">Mudah Digunakan</h3>
            <p class="text-gray-600">Cukup pilih jenis kulitmu, dan sistem akan merekomendasikan produk yang cocok.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
            <h3 class="text-xl font-bold text-pink-600 mb-2">Akurat & Terpercaya</h3>
            <p class="text-gray-600">Menggunakan metode WP berdasarkan jenis kandungan yang terkandung dalam produk skincare.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
            <h3 class="text-xl font-bold text-pink-600 mb-2">Cocok untuk Semua Kulit</h3>
            <p class="text-gray-600">Skincare direkomendasikan sesuai jenis kulit: berminyak, kering, normal, dan berjerawat.</p>
        </div>
    </div>

    <div class="mt-20 text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-6">Bagaimana Cara Kerjanya?</h2>
        <div class="max-w-md mx-auto text-gray-700 space-y-3 text-left">
            <div class="flex items-start gap-2">
                <span class="text-pink-500 font-bold">1.</span> <p>Pilih jenis kulitmu.</p>
            </div>
            <div class="flex items-start gap-2">
                <span class="text-pink-500 font-bold">2.</span> <p>Sistem akan menilai semua produk berdasarkan beberapa kriteria.</p>
            </div>
            <div class="flex items-start gap-2">
                <span class="text-pink-500 font-bold">3.</span> <p>Hasil produk terbaik ditampilkan berdasarkan perhitungan metode WP.</p>
            </div>
        </div>
    </div>

    <div class="mt-12 text-center">
        <a href="{{ route('rekomendasi.form') }}" class="inline-block bg-pink-500 hover:bg-pink-600 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition duration-300">
            Mulai Rekomendasi
        </a>
    </div>
</div>
@endsection
