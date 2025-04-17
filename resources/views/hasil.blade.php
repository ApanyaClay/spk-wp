@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center mb-5">Hasil Rekomendasi untuk Kulit {{ ucfirst($skinTypeName) }}</h2>

    @if(count($produk) > 0)
    <div class="mt-4 px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            @foreach ($produk as $p)
            <div class="bg-white rounded-2xl shadow-lg p-6 text-start">
                <img src="{{ $p->gambar }}" class="w-full rounded-lg mb-4" alt="{{ $p->nama }}" style="object-fit: cover; height: 200px;">
                <h3 class="text-xl font-bold text-pink-600 mb-2">{{ $p->nama }}</h3>
                <p class="text-gray-600 leading-relaxed">
                    <strong>Harga:</strong> Rp{{ number_format($p->harga) }} <br>
                    <strong>Rating:</strong> {{ $p->rating }} <br>
                    <strong>Popularitas:</strong> {{ $p->popularitas }} <br>
                    <strong>Skor Akhir:</strong> {{ number_format($p->hasil, 4) }}
                </p>
            </div>
            @endforeach
        </div>
    </div>
    @else
        <p class="text-center text-gray-500 mt-5">Tidak ada data produk untuk jenis kulit ini.</p>
    @endif
</div>
@endsection
