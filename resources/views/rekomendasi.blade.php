@extends('layouts.app')

@section('content')
<div class="bg-pink-50 min-h-screen py-10 px-4">
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-xl shadow-md">
        <h1 class="text-3xl font-bold text-pink-600 mb-4">Kulit {{ $data['judul'] }}</h1>
        <p class="text-gray-700 mb-6">{{ $data['konten'] }}</p>

        <h2 class="text-xl font-semibold text-pink-500 mb-2">Bahan Aktif yang Disarankan:</h2>
        <ul class="list-disc list-inside text-gray-700 mb-6">
            @foreach ($data['bahan'] as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

        <h2 class="text-xl font-semibold text-pink-500 mb-2">Tips Perawatan:</h2>
        <ol class="list-decimal list-inside text-gray-700 space-y-1">
            @foreach ($data['tips'] as $tip)
                <li>{{ $tip }}</li>
            @endforeach
        </ol>

        <div class="mt-8 text-center">
            <a href="{{ url('rekomendasi/hasil') . '?jenis=' . $tipe }}" class="bg-pink-600 hover:bg-pink-700 text-white font-semibold py-2 px-6 rounded-full transition">Lihat Produk Rekomendasi</a>
        </div>
    </div>
</div>
@endsection
