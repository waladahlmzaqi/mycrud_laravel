<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::paginate(5);
        return view('siswa.index', ['siswas' => $siswas]);
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_absen' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswa.index')
                         ->with('success','Tambah Siswa Sukses');
    }

    public function show(Siswa $siswa)
    {
        return view('siswa.show', ['siswa' => $siswa]);

    }

    public function edit(Siswa $siswa)
    {
        return view('siswa.edit', ['siswa' => $siswa]);

    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'no_absen' => 'required',
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswa.index')
                         ->with('warning','Edit Siswa Sukses');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();
        return redirect()->route('siswa.index')
                         ->with('danger','Hapus Siswa Sukses');
    }
}
