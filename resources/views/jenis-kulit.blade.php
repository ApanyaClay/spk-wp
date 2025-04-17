@extends('layouts.app')

@section('content')
<div class="bg-pink-50 min-h-screen py-12 px-6">
    <h1 class="text-4xl font-extrabold text-center text-pink-600 mb-10">Kenali Jenis Kulitmu</h1>

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
        
        <!-- Kulit Berminyak -->
        <a href="{{ route('rekomendasi', ['tipe' => 'berminyak']) }}" class="block bg-white rounded-2xl shadow-lg hover:shadow-xl hover:bg-pink-100 transition-all duration-300 p-6">
            <div class="flex items-start space-x-4">
                <div class="text-pink-600 text-3xl">💧</div>
                <div>
                    <h2 class="text-xl font-bold text-pink-600">Kulit Berminyak</h2>
                    <p class="text-gray-600 mt-1">Mengkilap, pori-pori besar, rentan berjerawat. Butuh kontrol minyak & hidrasi seimbang.</p>
                </div>
            </div>
        </a>

        <!-- Kulit Kering -->
        <a href="{{ route('rekomendasi', ['tipe' => 'kering']) }}" class="block bg-white rounded-2xl shadow-lg hover:shadow-xl hover:bg-pink-100 transition-all duration-300 p-6">
            <div class="flex items-start space-x-4">
                <div class="text-pink-600 text-3xl">🌵</div>
                <div>
                    <h2 class="text-xl font-bold text-pink-600">Kulit Kering</h2>
                    <p class="text-gray-600 mt-1">Tampak kasar, bersisik, atau pecah-pecah. Butuh pelembap intensif & hidrasi tinggi.</p>
                </div>
            </div>
        </a>

        <!-- Kulit Normal -->
        <a href="{{ route('rekomendasi', ['tipe' => 'normal']) }}" class="block bg-white rounded-2xl shadow-lg hover:shadow-xl hover:bg-pink-100 transition-all duration-300 p-6">
            <div class="flex items-start space-x-4">
                <div class="text-pink-600 text-3xl">🌼</div>
                <div>
                    <h2 class="text-xl font-bold text-pink-600">Kulit Normal</h2>
                    <p class="text-gray-600 mt-1">Seimbang & sehat. Tidak terlalu kering atau berminyak. Cukup perawatan dasar.</p>
                </div>
            </div>
        </a>

        <!-- Kulit Berjerawat -->
        <a href="{{ route('rekomendasi', ['tipe' => 'berjerawat']) }}" class="block bg-white rounded-2xl shadow-lg hover:shadow-xl hover:bg-pink-100 transition-all duration-300 p-6">
            <div class="flex items-start space-x-4">
                <div class="text-pink-600 text-3xl">💥</div>
                <div>
                    <h2 class="text-xl font-bold text-pink-600">Kulit Berjerawat</h2>
                    <p class="text-gray-600 mt-1">Mudah muncul jerawat & noda. Perlu produk yang lembut tapi efektif lawan bakteri.</p>
                </div>
            </div>
        </a>

    </div>
</div>
@endsection
