<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\SkinType;
use Illuminate\Support\Str;

class RekomendasiController extends Controller
{
    public function form()
    {
        $skin_types = SkinType::all();
        return view('rekomendasi.index', compact('skin_types'));
    }

    public function jenisKulit()
    {
        return view('jenis-kulit');
    }

    public function index(Request $request)
    {
        $skinTypeName  = $request->input('jenis');

        $skinType = SkinType::where('name', $skinTypeName)->first();

        $produks = $skinType
            ? Produk::where('skin_type_id', $skinType->id)->get()
            : collect();

        foreach ($produks as $produk) {
            $criterias = Criteria::where('type', $produk->jenis_produk)->get();
            $score = 1;
            foreach ($criterias as $criteria) {
                $field = Str::snake($criteria->name);

                if (isset($produk->{$field})) {
                    $value = $produk->{$field};
                    $value = ($value > 0) ? $value : 0.1;
                    $score *= pow($value, floatval($criteria->weight));
                }
            }
            $produk->score = $score;
        }
        $groupedProduks = $produks->groupBy('jenis_produk');

        // Hitung hasil per produk dalam tiap kelompok
        $finalGrouped = collect();

        foreach ($groupedProduks as $jenis => $list) {
            $totalScore = $list->sum('score');

            foreach ($list as $produk) {
                $produk->hasil = $totalScore > 0 ? $produk->score / $totalScore : 0;
            }

            // Sort by hasil desc dan simpan kembali
            $sortedList = $list->sortByDesc('hasil')->values();
            $finalGrouped[$jenis] = $sortedList;
        }

        return view('hasil', compact('finalGrouped', 'skinTypeName'));
    }

    public function tampilkanjenis($tipe)
    {
        $skinType = SkinType::where('name', $tipe)->first();

        if (!$skinType) {
            abort(404);
        }

        $data = [
            'judul' => ucfirst($tipe),
            'konten' => $skinType->konten,
            'bahan' => json_decode($skinType->bahan),
            'tips' => json_decode($skinType->tips)
        ];

        return view('rekomendasi', compact('data', 'tipe'));
    }
}
