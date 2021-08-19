<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Pelajaran;
use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function create(Kelas $kelas)
    {
        $guru = Guru::all();

        return view('pelajaran.create', compact('kelas', 'guru'));
    }

    public function store(Request $request, Kelas $kelas)
    {
        $validated = $request->validate([
            'mata_pelajaran' => 'required',
            'hari' => 'required',
            'guru_id' => 'required|numeric',
            'jam_masuk' => 'required|date_format:H:i',
            'jam_keluar' => 'required|date_format:H:i',
        ]);

        $validated['kelas_id'] = $kelas->id;

        if(Pelajaran::create($validated))
        {
            return redirect(route('kelas.show', $kelas->id))->with('message', 'data siswa berhasil di tambahkan.');
        }else {
            return redirect('kelas.show', $kelas->id)->with('message', 'data siswa gagal di tambahkan.');
        }
    }
    
    public function edit(Pelajaran $pelajaran)
    {
        $kelas = $pelajaran->kelas;
        $guru = Guru::all();

        return view('pelajaran.edit', compact('pelajaran', 'kelas', 'guru'));
    }

    public function update(Request $request, Pelajaran $pelajaran)
    {
        $validated = $request->validate([
            'mata_pelajaran' => 'required',
            'hari' => 'required',
            'guru_id' => 'required|numeric',
            'jam_masuk' => 'required|date_format:H:i',
            'jam_keluar' => 'required|date_format:H:i',
        ]);

        if($pelajaran->update($validated))
        {
            return redirect(route('pelajaran.show', $pelajaran->id))->with('message', 'pelajaran berhasil di update.');
        }else {
            return redirect(route('pelajaran.show', $pelajaran->id))->with('message', 'pelajaran gagal di update.');
        }
    }

    public function destroy(Pelajaran $pelajaran)
    {
        if($pelajaran->delete())
        {
            return redirect(route('kelas.show', $pelajaran->kelas_id))->with('message', 'pelajaran berhasil di Hapus.');
        }else {
            return redirect(route('kelas.show', $pelajaran->kelas_id))->with('message', 'pelajaran gagal di Hapus.');
        }
    }
}
