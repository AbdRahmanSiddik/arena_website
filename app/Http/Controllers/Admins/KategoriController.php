<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::withCount('arena')->get();

        return view('admin.kategori.kategori', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategori,nama_kategori'
        ], [
            'nama_kategori.unique' => 'Kategori ini sudah ada'
        ]);

        $token = Str::random(13);
        $nama_kategori = $request->nama_kategori;
        $icon = $request->file('icon');

        $data = Kategori::data($token, $nama_kategori, $icon);

        Kategori::create($data);

        return redirect()->route('admin.kategori')->with([
            'success'=>"Berhasil Menambahkan Data $nama_kategori"
        ]);
    }

    public function update(Request $request, $token)
    {
        $request->validate([
            'nama_kategori' => 'required|unique:kategori,nama_kategori'
        ], [
            'nama_kategori.unique' => 'Kategori ini sudah ada'
        ]);

        $tokenNew = Str::random(13);
        $nama_kategori = $request->nama_kategori;
        $icon = $request->file('icon');

        $data = Kategori::data($tokenNew, $nama_kategori, $icon);

        Kategori::where('token_kategori', $token)->update($data);

        return redirect()->route('admin.kategori')->with([
            'success'=>"Berhasil Mengedit Data $nama_kategori"
        ]);
    }

    public function destroy($token)
    {
        Kategori::where('token_kategori', $token)->delete();

        return redirect()->route('admin.kategori')->with([
            'success'=>"Berhasil Menghapus Data"
        ]);
    }
}
