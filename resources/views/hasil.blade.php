@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-5">Hasil Rekomendasi untuk Kulit {{ ucfirst($skinTypeName) }}</h2>

    @forelse ($finalGrouped as $jenis => $produks)
        <h3 class="text-center text-2xl font-bold mt-8 mb-4 capitalize">{{ str_replace('_', ' ', $jenis) }}</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @foreach ($produks as $produk)
                <div class="bg-white rounded-2xl shadow-lg p-6 text-start">
                    <img src="{{ asset('image/' . $produk->gambar) }}" class="w-full rounded-lg mb-4" alt="{{ $produk->nama }}" style="object-fit: cover; height: 200px;">
                    <h3 class="text-xl font-bold text-pink-600 mb-2">{{ $produk->nama }}</h3>
                    <p class="text-gray-600 leading-relaxed">
                        <strong>Harga:</strong> Rp{{ number_format($produk->harga) }} <br>
                        <strong>Rating:</strong> {{ $produk->rating }} <br>
                        <strong>Popularitas:</strong> {{ $produk->popularitas }} <br>
                        <strong>Skor Akhir:</strong> {{ number_format($produk->hasil, 4) }}
                    </p>
                </div>
            @endforeach
        </div>
    @empty
        <p class="text-center text-gray-500 mt-5">Tidak ada data produk untuk jenis kulit ini.</p>
    @endforelse
</div>
@endsection
