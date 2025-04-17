<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkinType extends Model
{
    use HasFactory;

    protected $table = 'skin_types';

    protected $fillable = ['name'];

    public function produks()
    {
        return $this->hasMany(Produk::class);
    }
}
