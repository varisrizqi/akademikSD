<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        $siswa = Siswa::where( 'nama', 'LIKE', '%' . $request->search . '%' )->paginate(10);

        return view('admin.dataSiswa.index', compact('siswa'));
    }
    
    public function create()
    {        
        return view('admin.dataSiswa.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nipd' => 'unique:siswa,nipd|numeric|nullable',
            'nisn' => 'unique:siswa,nisn|numeric|nullable',
            'jenis_kelamin' => 'required',
            'skhun' => 'unique:siswa,skhun|numeric|nullable',
            'penerima_kps' => 'required',
            'nomor_kps' => 'unique:siswa,nomor_kps|numeric|nullable',
            'rombel_saat_ini' => 'required',
            'no_peserta_ujian_nasional' => 'unique:siswa,no_peserta_ujian_nasional|numeric|nullable',
            'penerima_kip' => '',
            'nomor_kip' => 'unique:siswa,nomor_kip|nullable',
            'nama_di_kip' => '',
            'nomor_kks' => 'unique:siswa,nomor_kks|nullable',
            'layak_pip' => '',
            'alasan_layak_pip' => '',
            'kebutuhan_khusus' => '',
            'no_seri_ijazah' => 'unique:siswa,no_seri_ijazah|nullable',
        ]);
        
        $validated['password'] = 'password';

        if(siswa::create($validated))
        {
            return redirect(route('dataSiswa'))->with('message', 'data siswa berhasil di tambahkan.');
        }else {
            return redirect('dataSiswa')->with('message', 'data siswa gagal di tambahkan.');
        }
    }
    
    public function show(Siswa $siswa)
    {
        return view('admin.dataSiswa.show', compact('siswa'));
    }
    
    public function edit(Siswa $siswa)
    {
        return view('admin.dataSiswa.edit', compact('siswa') );

    }
    
    public function update(Siswa $siswa, Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nipd' => "unique:siswa,nipd,{$siswa->id}|numeric|nullable",
            'nisn' => "unique:siswa,nisn,{$siswa->id}|numeric|nullable",
            'jenis_kelamin' => 'required',
            'skhun' => "unique:siswa,skhun,{$siswa->id}|numeric|nullable",
            'penerima_kps' => 'required',
            'nomor_kps' => "unique:siswa,nomor_kps,{$siswa->id}|numeric|nullable",
            'rombel_saat_ini' => 'required',
            'no_peserta_ujian_nasional' => "unique:siswa,no_peserta_ujian_nasional,{$siswa->id}numeric|nullable",
            'penerima_kip' => '',
            'nomor_kip' => "unique:siswa,nomor_kip,{$siswa->id}",
            'nama_di_kip' => '',
            'nomor_kks' => "unique:siswa,nomor_kks,{$siswa->id}",
            'layak_pip' => '',
            'alasan_layak_pip' => '',
            'kebutuhan_khusus' => '',
            'no_seri_ijazah' => "unique:siswa,no_seri_ijazah,{$siswa->id}",           
        ]);

        if($siswa->update($validated))
        {
            return redirect(route('dataSiswa'))->with('message', 'data siswa berhasil di update.');
        }else {
            return redirect('dataSiswa')->with('message', 'data siswa gagal di update.');
        }


    }
    
    public function destroy(Siswa $siswa)
    {
        if($siswa->delete())
        {
            return redirect(route('dataSiswa'))->with('message', 'data siswa berhasil di Hapus.');
        }else {
            return redirect('dataSiswa')->with('message', 'data siswa gagal di Hapus.');
        }
        
    }
}
