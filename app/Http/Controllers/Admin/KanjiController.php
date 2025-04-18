<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kanji;
use Illuminate\Http\Request;

class KanjiController extends Controller
{
    // Menampilkan daftar kanji
    public function index()
    {
        $kanjis = Kanji::all();
        return view('admin.kanji.index', compact('kanjis'));
    }

    // Menampilkan form untuk membuat kanji baru
    public function create()
    {
        return view('admin.kanji.create');
    }

    // Menyimpan data kanji baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'kanji' => 'required|max:10',
            'kunyomi' => 'nullable|string',
            'onyomi' => 'nullable|string',
            'cara_baca' => 'nullable|string', // Validasi untuk cara baca
            'arti' => 'required|string',
            'level' => 'required|in:N1,N2,N3,N4,N5',
        ]);

        Kanji::create($request->all());

        return redirect()->route('kanji.index')->with('success', 'Kanji berhasil ditambahkan.');
    }

    // Menampilkan detail kanji tertentu
    public function show(Kanji $kanji)
    {
        return view('admin.kanji.show', compact('kanji'));
    }

    // Menampilkan form untuk mengedit kanji yang dipilih
    public function edit(Kanji $kanji)
    {
        return view('admin.kanji.edit', compact('kanji'));
    }

    // Memperbarui data kanji yang telah diedit
    public function update(Request $request, Kanji $kanji)
    {
        $request->validate([
            'kanji' => 'required|max:10',
            'kunyomi' => 'nullable|string',
            'onyomi' => 'nullable|string',
            'cara_baca' => 'nullable|string', // Validasi untuk cara baca
            'arti' => 'required|string',
            'level' => 'required|in:N1,N2,N3,N4,N5',
        ]);

        $kanji->update($request->all());

        return redirect()->route('kanji.index')->with('success', 'Kanji berhasil diperbarui.');
    }

    // Menghapus data kanji yang dipilih
    public function destroy(Kanji $kanji)
    {
        $kanji->delete();

        return redirect()->route('kanji.index')->with('success', 'Kanji berhasil dihapus.');
    }
}
