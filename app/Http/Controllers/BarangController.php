<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index(Request $request)
{
    $keyword = $request->keyword;

    $query = Barang::query();

    if ($keyword) {
        $query->where('nama_barang', 'like', "%{$keyword}%");
    }

    $barangs = $query
                ->latest()
                ->paginate(10)
                ->withQueryString();

    return view('barang.index', compact('barangs'));
}

    public function create()
    {
        return view('barang.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric'
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')
            ->with('success', 'Data berhasil ditambahkan.');
    }

    public function edit(Barang $barang)
    {
        return view('barang.edit', compact('barang'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'nama_barang' => 'required',
            'jumlah' => 'required|integer',
            'harga' => 'required|numeric'
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')
            ->with('success', 'Data berhasil diubah.');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang.index')
            ->with('success', 'Data berhasil dihapus.');
    }
}