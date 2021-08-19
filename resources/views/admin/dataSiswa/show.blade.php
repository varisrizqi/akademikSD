@extends('layouts.app', ['title'=>'Lihat Data Siswa'])
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
              <div class="card card-user">
                <div class="card-header">
                  <h5 class="card-title ml-2">Lihat Data Siswa</h5>
                </div>
                <div class="card-body pr-5 pl-5">
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nama</label>
                          <input disabled name="nama" type="text" class="form-control" placeholder="" value="{{ old('nama') ? old('nama') : $siswa->nama }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>NIPD</label>
                          <input disabled name="nipd" type="number" class="form-control" placeholder="" value="{{ old('nipd') ? old('nipd') : $siswa->nipd }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>NISN</label>
                          <input disabled name="nisn" type="number" class="form-control" value="{{ old('nisn') ? old('nisn') : $siswa->nisn }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Jenis kelamin</label>
                          <input disabled name="jenis_kelamin" type="text" class="form-control" value=" {{ $siswa->jenis_kelamin }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>SKHUN</label>
                          <input disabled name="skhun" type="text" class="form-control" placeholder="" value="{{ old('skhun') ? old('skhun') : $siswa->skhun }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Penerima KPS</label>
                          <input disabled name="penerima_kps" type="text" class="form-control" placeholder="" value="{{ old('penerima_kps') ? old('penerima_kps') : $siswa->penerima_kps }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nomor KPS</label>
                          <input disabled name="no_kps" type="text" class="form-control" value="{{ old('no_kps') ? old('no_kps') : $siswa->no_kps }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Rombongan belajar saat ini</label>
                          <input disabled name="rombel_saat_ini" type="text" class="form-control" value="{{ old('rombel_saat_ini') ? old('rombel_saat_ini') : $siswa->rombel_saat_ini }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nomor peserta UN</label>
                          <input disabled name="no_peserta_ujian_nasional" type="number" class="form-control" value="{{ old('no_peserta_ujian_nasional') ? old('no_peserta_ujian_nasional') : $siswa->no_peserta_ujian_nasional }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Penerima KIP</label>
                          <input disabled name="penerima_kip" type="text" class="form-control" value="{{ old('penerima_kip') ? old('penerima_kip') : $siswa->penerima_kip }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nomor KIP</label>
                          <input disabled name="nomor_kip" type="text" class="form-control" value="{{ old('nomor_kip') ? old('nomor_kip') : $siswa->nomor_kip }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nama di KIP</label>
                          <input disabled name="nama_di_kip" type="text" class="form-control" value="{{ old('nama_di_kip') ? old('nama_di_kip') : $siswa->nama_di_kip }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nomor KKS</label>
                          <input disabled name="nomor_kks" type="text" class="form-control" value="{{ old('nomor_kks') ? old('nomor_kks') : $siswa->nomor_kks }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Layak PIP</label>
                          <input disabled name="layak_pip" type="text" class="form-control" value="{{ old('layak_pip') ? old('layak_pip') : $siswa->layak_pip }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Alasan layak PIP</label>
                          <input disabled name="alasan_layak_pip" type="text" class="form-control" value="{{ old('alasan_layak_pip') ? old('alasan_layak_pip') : $siswa->alasan_layak_pip }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Kebutuhan khusus</label>
                          <input disabled name="kebutuhan_khusus" type="text" class="form-control" value="{{ old('kebutuhan_khusus') ? old('kebutuhan_khusus') : $siswa->kebutuhan_khusus }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nomor seri ijazah</label>
                          <input disabled name="no_seri_ijazah" type="text" class="form-control" value="{{ old('no_seri_ijazah') ? old('no_seri_ijazah') : $siswa->no_seri_ijazah }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <a href="{{ route('dataSiswa') }}" class="btn btn-primary mx-auto" >Kembali</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
