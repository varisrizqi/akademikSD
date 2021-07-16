@extends('layouts.app', ['title'=>'Data guru'])
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
              <div class="card card-user">
                <div class="card-header">
                  <h5 class="card-title ml-2">Tambah Data Guru</h5>
                </div>
                <div class="card-body pr-5 pl-5">
                  <form action="{{ route('dataGuru.store') }}" method="POST">
                    @csrf
                    @method('POST')
                    @if ($errors->any())
                      <div class="row">
                          <div class="alert alert-danger pr-5" style="width: 100%;">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="mt-2 mb-2">Peringatan !</h4>
                            @foreach ($errors->all() as $error)
                              {{ $error }} | 
                            @endforeach
                        </div>
                      </div>
                    @endif
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nama <i class="text-warning">( *wajib )</i></label>
                          <input name="nama" type="text" class="form-control" placeholder="" value="{{ old('nama') }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>NIP <i class="text-warning">( *wajib )</i></label>
                          <input name="nip" type="number" class="form-control" placeholder="" value="{{ old('nip') }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>NUPTK</label>
                          <input name="nuptk" type="number" class="form-control" value="{{ old('nuptk') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis kelamin <i class="text-warning">( *wajib )</i></label>
                          <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            <option selected disabled>pilih...</option>
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Tanggal lahir <i class="text-warning">( *wajib )</i></label>
                          <input name="tanggal_lahir" type="date" class="form-control" placeholder="" value="{{ old('tanggal_lahir') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Tempat lahir <i class="text-warning">( *wajib )</i></label>
                          <input name="tempat_lahir" type="text" class="form-control" value="{{ old('tempat_lahir') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Nama ibu kandung <i class="text-warning">( *wajib )</i></label>
                          <input name="nama_ibu_kandung" type="text" class="form-control" value="{{ old('nama_ibu_kandung') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label for="jenis_ptk">Jenis ptk <i class="text-warning">( *wajib )</i></label>
                          <select name="jenis_ptk" class="form-control" id="jenis_ptk">
                            <option selected disabled>pilih...</option>
                            <option value="Guru matapelajaran">Guru matapelajaran</option>
                            <option value="Guru kelas">Guru kelas</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Agama <i class="text-warning">( *wajib )</i></label>
                          <input name="agama" type="text" class="form-control" placeholder="" value="{{ old('agama') }}">
                        </div>
                      </div>
                      <div class="col-md-6 px-1">
                        <div class="form-group">
                          <label>Alamat jalan <i class="text-warning">( *wajib )</i></label>
                          <input name="alamat_jalan" type="text" class="form-control" value="{{ old('agama') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-2 px-1">
                        <div class="form-group">
                          <label>RT <i class="text-warning">( *wajib )</i></label>
                          <input name="rt" type="text" class="form-control" placeholder="" value="{{ old('rt') }}">
                        </div>
                      </div>
                      <div class="col-md-2 px-1">
                        <div class="form-group">
                          <label>RW <i class="text-warning">( *wajib )</i></label>
                          <input name="rw" type="text" class="form-control" placeholder="" value="{{ old('rw') }}">
                        </div>
                      </div>
                      <div class="col-md-2 px-1">
                        <div class="form-group">
                          <label for="dusun">Dusun <i class="text-warning">( *wajib )</i></label>
                          <input name="dusun" type="text" id="dusun" class="form-control" value="{{ old('dusun') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label for="desa_kelurahan">Desa/kelurahan <i class="text-warning">( *wajib )</i></label>
                          <input name="desa_kelurahan" id="desa_kelurahan" type="text" class="form-control" value="{{ old('desa_kelurahan') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label for="kecamatan">Kecamatan <i class="text-warning">( *wajib )</i></label>
                          <input name="kecamatan" type="text" id="kecamatan" class="form-control" value="{{ old('kecamatan') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Kode pos</label>
                          <input name="kode_pos" type="number" class="form-control" placeholder="" value="">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Telepon</label>
                          <input name="telepon" type="number" class="form-control" placeholder="" value="{{ old('telepon') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>HP/WA</label>
                          <input name="hp" type="number" class="form-control" value="{{ old('hp') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Email</label>
                          <input name="email" type="email" class="form-control" value="{{ old('email') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Tugas tambahan</label>
                          <input name="tugas_tambahan" type="text" class="form-control" placeholder="" value="{{ old('tugas_tambahan') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>SK CPNS</label>
                          <input name="sk_cpns" type="text" class="form-control" placeholder="" value="{{ old('sk_cpns') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Tanggal CPNS</label>
                          <input name="tanggal_cpns" type="date" class="form-control" value="{{ old('tanggal_cpns') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>SK pengangkatan</label>
                          <input name="sk_pengangkatan" type="text" class="form-control" value="{{ old('sk_pengangkatan') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>TMT pengangkatan</label>
                          <input name="tmt_pengangkatan" type="date" class="form-control" placeholder="" value="{{ old('tmt_pengangkatan') }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Lembaga pengangkatan</label>
                          <input name="lembaga_pengangkatan" type="text" class="form-control" placeholder="" value="{{ old('lembaga_pengangkatan') }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Sumber gaji</label>
                          <input name="sumber_gaji" type="text" class="form-control" value="{{ old('sumber_gaji') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Status perkawinan </label><i class="text-warning">( *wajib )</i>
                          <select name="status_perkawinan" class="form-control">
                            <option disabled selected>Pilih...</option>
                            <option value="1">Sudah</option>
                            <option value="0">Belum</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nama suami/istri</label>
                          <input name="nama_suami_atau_istri" type="text" class="form-control" placeholder="" value="{{ old('nama_suami_atau_istri') }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>NIP suami/istri</label>
                          <input name="nip_suami_atau_istri" type="text" class="form-control" value="{{ old('nip_suami_atau_istri') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>TMT PNS </label>
                          <input name="tmt_pns" type="text" class="form-control" placeholder="" value="{{ old('tmt_pns') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Sudah lisensi kepala sekolah </label><i class="text-warning">( *wajib )</i>
                          <select name="sudah_lisensi_kepala_sekolah" class="form-control">
                            <option disabled selected>Pilih...</option>
                            <option value="1">Iya</option>
                            <option value="0">Tidak</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Pernah diklat kepengawasan </label><i class="text-warning">( *wajib )</i>
                          <select name="pernah_diklat_kepengawasan" class="form-control">
                            <option disabled selected>Pilih...</option>
                            <option value="1">Iya</option>
                            <option value="0">Tidak</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Keahlian braille </label><i class="text-warning">( *wajib )</i>
                          <select name="keahlian_braillle" class="form-control">
                            <option disabled selected>Pilih...</option>
                            <option value="1">Iya</option>
                            <option value="0">Tidak</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>NPWP</label>
                          <input name="npwp" type="number" class="form-control" placeholder="" value="{{ old('npwp') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Nama wajib pajak</label>
                          <input name="nama_wajib_pajak" type="text" class="form-control" placeholder="" value="{{ old('nama_wajib_pajak') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>NIK</label><i class="text-warning">( *wajib )</i>
                          <input name="nik" type="number" class="form-control" value="{{ old('nik') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Nomor KK</label>
                          <input name="no_kk" type="number" class="form-control" value="{{ old('no_kk') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Kewarganegaraan</label><i class="text-warning">( *wajib )</i>
                          <input name="kewarganegaraan" type="text" class="form-control" placeholder="" value="{{ old('kewarganegaraan') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Bank</label>
                          <input name="bank" type="text" class="form-control" placeholder="" value="{{ old('bank') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Nomor rekening bank</label>
                          <input name="nomor_rekening_bank" type="text" class="form-control" value="{{ old('nomor_rekening_bank') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Rekening atas nama</label>
                          <input name="rekening_atas_nama" type="text" class="form-control" value="{{ old('rekening_atas_nama') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Karpeg</label>
                          <input name="karpeg" type="text" class="form-control" placeholder="" value="{{ old('karpeg') }}">
                        </div>
                      </div>
                      <div class="col-md-3 px-1">
                        <div class="form-group">
                          <label>Karis karsu</label>
                          <input name="karis_karsu" type="text" class="form-control" placeholder="" value="{{ old('karis_karsu') }}">
                        </div>
                      </div>
                      <div class="col-md-2 px-1">
                        <div class="form-group">
                          <label>NUKS</label>
                          <input name="nuks" type="text" class="form-control" value="{{ old('nuks') }}">
                        </div>
                      </div>
                      <div class="col-md-2 px-1">
                        <div class="form-group">
                          <label>Lintang</label>
                          <input name="lintang" type="text" class="form-control" value="{{ old('lintang') }}">
                        </div>
                      </div>
                      <div class="col-md-2 px-1">
                        <div class="form-group">
                          <label>Bujur</label>
                          <input name="bujur" type="text" class="form-control" value="{{ old('bujur') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <button class="btn btn-primary mx-auto" style="width: 30%">Simpan</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
