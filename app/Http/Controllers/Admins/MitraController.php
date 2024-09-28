<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Models\Mitra;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index()
    {
        $mitra = Mitra::with('user')->get();

        return view('admin.mitra.mitra', compact('mitra'));
    }

    public function create()
    {
        return view('admin.mitra.add_mitra');
    }

    public function store(Request $request)
    {
        return redirect()->route('admin.mitra');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
