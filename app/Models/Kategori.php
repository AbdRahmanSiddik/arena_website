<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $guarded = [];

    public function arena()
    {
        return $this->hasMany(Arena::class, 'kategori_id', 'id_kategori');
    }

    public static function data($token, $nama_kategori, $icon)
    {
        if(isset($icon)){
            $data = [
                'token_kategori' => $token,
                'nama_kategori' => $nama_kategori,
                'icon' => $icon
            ];
        } else{
            $data = [
                'token_kategori' => $token,
                'nama_kategori' => $nama_kategori
            ];
        }

        return $data;
    }
}
