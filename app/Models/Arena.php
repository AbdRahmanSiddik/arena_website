<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arena extends Model
{
    use HasFactory;
    protected $table = 'arena';
    protected $guarded = [];

    public function mitraArena()
    {
        return $this->hasMany(MitraArena::class, 'mitra_arena_id', 'id_mitra_arena');
    }

    public function mitra()
    {
        return $this->hasMany(Mitra::class, 'mitra_id', 'id_mitra');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id_kategori');
    }
}
