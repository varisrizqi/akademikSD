<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function index(Request $request)
    {
        $kelas = Kelas::where( 'kelas', 'LIKE', '%' . $request->search . '%' )->orderBy('tahun_akademik', 'desc')->paginate(10);
    
        return view('kelas.index', compact('kelas'));
    }

    public function create()
    {
        return view('kelas.create');
    }

    public function destroy(Kelas $kelas)
    {
        DB::table('kelas_siswa')->where('kelas_id', '=', $kelas->id)->delete();

        if($kelas->delete())
        {
            return redirect(route('kelas'))->with('message', 'Kelas berhasil di hapus.');
        }else {
            return redirect('kelas')->with('message', 'Kelas gagal di hapus.');
        }
    }

    public function edit(Kelas $kelas)
    {
        return view('kelas.edit', compact('kelas'));
    }

    public function show(Kelas $kelas)
    {
        return view('kelas.show', compact('kelas'));
    }
}
