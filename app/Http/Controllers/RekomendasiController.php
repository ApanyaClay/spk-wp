<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\SkinType;

class RekomendasiController extends Controller
{
    public function form()
    {
        $skin_types = SkinType::all();
        return view('rekomendasi.index', compact('skin_types'));
    }

    public function jenisKulit()
    {
        $skin_types = SkinType::all();
        return view('jenis-kulit', compact('skin_types'));
    }

    public function index(Request $request)
    {
        $skinTypeName  = $request->input('jenis');

        $skinType = SkinType::where('name', $skinTypeName)->first();

        $produk = $skinType
            ? Produk::where('skin_type_id', $skinType->id)->get()
            : collect(); // kosong jika tidak ketemu

        $criterias = Criteria::whereIn('name', ['harga', 'rating', 'popularitas'])->get();

        $bobot = [];
        foreach ($criterias as $c) {
            $bobot[$c->name] = $c->weight;
        }


        $jumlahBobot = array_sum($bobot);
        foreach ($bobot as $k => $v) {
            $bobot[$k] = $v / $jumlahBobot;
        }

        foreach ($produk as $p) {
            $p->skor = pow($p->harga, -$bobot['harga']) *
                pow($p->rating, $bobot['rating']) *
                pow($p->popularitas, $bobot['popularitas']);
        }

        $totalSkor = $produk->sum('skor');

        foreach ($produk as $p) {
            $p->hasil = $p->skor / $totalSkor;
        }

        $produk = $produk->sortByDesc('hasil');
        // dd($produk);

        return view('hasil', compact('produk', 'skinTypeName'));
    }

    public function tampilkanjenis($tipe)
    {
        // Ambil data jenis kulit berdasarkan tipe dari database
        $skinType = SkinType::where('name', $tipe)->first();

        // Jika tidak ditemukan data untuk tipe ini, tampilkan 404
        if (!$skinType) {
            abort(404); // Jika tipe tidak dikenali
        }

        // Ambil data untuk dikirim ke view
        $data = [
            'judul' => ucfirst($tipe), // Judul berdasarkan tipe (misal: 'Kulit Berminyak')
            'konten' => $skinType->konten,
            'bahan' => json_decode($skinType->bahan), // Mengubah json string kembali ke array
            'tips' => json_decode($skinType->tips) // Mengubah json string kembali ke array
        ];

        return view('rekomendasi', compact('data', 'tipe'));
    }
}
