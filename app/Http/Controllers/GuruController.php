<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class GuruController extends Controller
{
    public function index(Request $request)
    {
        $guru = Guru::where( 'nama', 'LIKE', '%' . $request->search . '%' )->paginate(10);

        return view('admin.dataGuru.index', compact('guru'));
    }
    
    public function create()
    {        

        return view('admin.dataGuru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nuptk' => 'unique:guru,nuptk|numeric|nullable',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'nip' => 'required|unique:guru,nip|numeric',
            'jenis_ptk' => 'required',
            'agama' => 'required',
            'alamat_jalan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'dusun' => 'required',
            'desa_kelurahan' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'numeric|nullable',
            'telepon' => 'numeric|nullable',
            'hp' => 'numeric|nullable',
            'tugas_tambahan' => '',
            'sk_cpns' => '',
            'tanggal_cpns' => 'date|nullable',
            'sk_pengangkatan' => '',
            'tmt_pengangkatan' => 'date|nullable',
            'lembaga_pengangkatan' => '',
            'sumber_gaji' => '',
            'nama_ibu_kandung' => 'required',
            'status_perkawinan' => 'required',
            'nama_suami_atau_istri' => '',
            'nip_suami_atau_istri' => 'unique:guru,nip_suami_atau_istri|nullable',
            'tmt_pns' => 'date|nullable',
            'sudah_lisensi_kepala_sekolah' => 'required|boolean',
            'pernah_diklat_kepengawasan' => 'required|boolean',
            'keahlian_braillle' => 'required|boolean',
            'npwp' => 'unique:guru,npwp|nullable',
            'nama_wajib_pajak' => '',
            'kewarganegaraan' => 'required',
            'bank' => '',
            'nomor_rekening_bank' => '',
            'rekening_atas_nama' => '',
            'nik' => 'required|unique:guru,nik|numeric',
            'no_kk' => 'numeric|nullable',
            'karpeg' => '',
            'karis_karsu' => '',
            'lintang' => '',
            'bujur' => '',
            'nuks' => '',
            'email' => 'unique:guru,email|nullable',
        ]);
        
        $validated['password'] = 'password';

        if(Guru::create($validated))
        {
            return redirect(route('dataGuru'))->with('message', 'data guru berhasil di tambahkan.');
        }else {
            return redirect('dataGuru')->with('message', 'data guru gagal di tambahkan.');
        }
    }
    
    public function show(Guru $guru)
    {
        return view('admin.dataGuru.show', $guru);
    }
    
    public function edit(Guru $guru)
    {
        return view('admin.dataGuru.edit', compact('guru') );

    }
    
    public function update(Guru $guru, Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nuptk' => "unique:guru,nuptk,{$guru->id}|numeric|nullable",
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'nip' => "required|unique:guru,nip,{$guru->id}|numeric",
            'jenis_ptk' => 'required',
            'agama' => 'required',
            'alamat_jalan' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'dusun' => 'required',
            'desa_kelurahan' => 'required',
            'kecamatan' => 'required',
            'kode_pos' => 'numeric|nullable',
            'telepon' => 'numeric|nullable',
            'hp' => 'numeric|nullable',
            'tugas_tambahan' => '',
            'sk_cpns' => '',
            'tanggal_cpns' => 'date|nullable',
            'sk_pengangkatan' => '',
            'tmt_pengangkatan' => 'date|nullable',
            'lembaga_pengangkatan' => '',
            'sumber_gaji' => '',
            'nama_ibu_kandung' => 'required',
            'status_perkawinan' => 'required',
            'nama_suami_atau_istri' => '',
            'nip_suami_atau_istri' => "unique:guru,nip_suami_atau_istri,{$guru->id}|nullable",
            'tmt_pns' => 'date|nullable',
            'sudah_lisensi_kepala_sekolah' => 'required|boolean',
            'pernah_diklat_kepengawasan' => 'required|boolean',
            'keahlian_braillle' => 'required|boolean',
            'npwp' => "unique:guru,npwp,{$guru->id}|nullable",
            'nama_wajib_pajak' => '',
            'kewarganegaraan' => 'required',
            'bank' => '',
            'nomor_rekening_bank' => '',
            'rekening_atas_nama' => '',
            'nik' => "required|unique:guru,nik,{$guru->id}|numeric",
            'no_kk' => 'numeric|nullable',
            'karpeg' => '',
            'karis_karsu' => '',
            'lintang' => '',
            'bujur' => '',
            'nuks' => '',
            'email' => "unique:guru,email,{$guru->id}|nullable",
        ]);

        if($guru->update($validated))
        {
            return redirect(route('dataGuru'))->with('message', 'data guru berhasil di update.');
        }else {
            return redirect('dataGuru')->with('message', 'data guru gagal di update.');
        }


    }
    
    public function destroy(Guru $guru)
    {
        if($guru->delete())
        {
            return redirect(route('dataGuru'))->with('message', 'data guru berhasil di Hapus.');
        }else {
            return redirect('dataGuru')->with('message', 'data guru gagal di Hapus.');
        }
        
    }
}
