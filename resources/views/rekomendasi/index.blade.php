@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-pink-50 flex items-center justify-center px-4">
        <div class="bg-white shadow-lg rounded-xl p-10 max-w-md w-full text-center">
            <h2 class="text-2xl font-bold text-pink-600 mb-6">Pilih Jenis Kulitmu</h2>

            <form action="{{ route('rekomendasi.hasil') }}" method="GET" class="space-y-6">
                <div>
                    <select name="jenis"
                        class="w-full border border-pink-300 rounded-lg py-3 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:border-pink-500"
                        required>
                        <option value="" disabled selected>-- Pilih Jenis Kulit --</option>
                        @foreach ($skin_types as $skinType)
                            <option value="{{ $skinType->name }}">{{ ucfirst($skinType->name) }}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <button type="submit"
                        class="w-full bg-pink-600 hover:bg-pink-700 text-white font-semibold py-3 px-6 rounded-lg transition duration-300">
                        Lihat Rekomendasi
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
