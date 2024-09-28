<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MitraArena extends Model
{
    use HasFactory;
    protected $table = 'mitra_arena';
    protected $guarded = [];

    public function mitra()
    {
        return $this->belongsTo(Mitra::class, 'mitra_id', 'id_mitra');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id', 'id_kategori');
    }

    public function arena()
    {
        return $this->belongsTo(Arena::class, 'arena_id', 'id_arena');
    }
}
