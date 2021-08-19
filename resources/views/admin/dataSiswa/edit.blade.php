@extends('layouts.app', ['title'=>'Edit Data Siswa'])
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
              <div class="card card-user">
                <div class="card-header">
                  <h5 class="card-title ml-2">Edit Data Siswa</h5>
                </div>
                <div class="card-body pr-5 pl-5">
                  <form action="{{ route('dataSiswa.update', $siswa->id) }}" method="POST">
                    @csrf
                    @method('put')
                    @if ($errors->any())
                      <div class="row mb-4">
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
                          <input name="nama" type="text" class="form-control" placeholder="" value="{{ old('nama') ? old('nama') : $siswa->nama }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>NIPD <i class="text-warning">( *wajib )</i></label>
                          <input name="nipd" type="number" class="form-control" placeholder="" value="{{ old('nipd') ? old('nipd') : $siswa->nipd }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>NISN <i class="text-warning">( *wajib )</i></label>
                          <input name="nisn" type="number" class="form-control" value="{{ old('nisn') ? old('nisn') : $siswa->nisn }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis kelamin <i class="text-warning">( *wajib )</i></label>
                          <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            <option disabled>pilih...</option>
                            <option {{ $siswa->jenis_kelamin == "laki-laki" ? "selected" : "" }} value="laki-laki">laki-laki</option>
                            <option {{ $siswa->jenis_kelamin == "perempuan" ? "selected" : "" }} value="perempuan">perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>SKHUN</label>
                          <input name="skhun" type="text" class="form-control" placeholder="" value="{{ old('skhun') ? old('skhun') : $siswa->skhun }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label for="penerima_kps">Penerima KPS <i class="text-warning">( *wajib )</i></label>
                          <select name="penerima_kps" class="form-control" id="penerima_kps">
                            <option {{ $siswa->penerima_kps == "Ya" ? "selected" : "" }} value="Ya">Ya</option>
                            <option {{ $siswa->penerima_kps == "Tidak" ? "selected" : "" }} value="Tidak" selected>Tidak</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nomor KPS</label>
                          <input name="no_kps" type="text" class="form-control" value="{{ old('no_kps') ? old('no_kps') : $siswa->no_kps }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Rombongan belajar saat ini<i class="text-warning"> (*wajib)</i></label>
                          <input name="rombel_saat_ini" type="text" class="form-control" value="{{ old('rombel_saat_ini') ? old('rombel_saat_ini') : $siswa->rombel_saat_ini }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nomor peserta UN</label>
                          <input name="no_peserta_ujian_nasional" type="number" class="form-control" value="{{ old('no_peserta_ujian_nasional') ? old('no_peserta_ujian_nasional') : $siswa->no_peserta_ujian_nasional }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Penerima KIP</label>
                          <input name="penerima_kip" type="text" class="form-control" value="{{ old('penerima_kip') ? old('penerima_kip') : $siswa->penerima_kip }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nomor KIP</label>
                          <input name="nomor_kip" type="text" class="form-control" value="{{ old('nomor_kip') ? old('nomor_kip') : $siswa->nomor_kip }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nama di KIP</label>
                          <input name="nama_di_kip" type="text" class="form-control" value="{{ old('nama_di_kip') ? old('nama_di_kip') : $siswa->nama_di_kip }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nomor KKS</label>
                          <input name="nomor_kks" type="text" class="form-control" value="{{ old('nomor_kks') ? old('nomor_kks') : $siswa->nomor_kks }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Layak PIP</label>
                          <input name="layak_pip" type="text" class="form-control" value="{{ old('layak_pip') ? old('layak_pip') : $siswa->layak_pip }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Alasan layak PIP</label>
                          <input name="alasan_layak_pip" type="text" class="form-control" value="{{ old('alasan_layak_pip') ? old('alasan_layak_pip') : $siswa->alasan_layak_pip }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Kebutuhan khusus</label>
                          <input name="kebutuhan_khusus" type="text" class="form-control" value="{{ old('kebutuhan_khusus') ? old('kebutuhan_khusus') : $siswa->kebutuhan_khusus }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nomor seri ijazah</label>
                          <input name="no_seri_ijazah" type="text" class="form-control" value="{{ old('no_seri_ijazah') ? old('no_seri_ijazah') : $siswa->no_seri_ijazah }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <a href="{{ route('dataSiswa') }}" class="btn btn-danger mx-auto" >Batal</a>
                      <button type="submit" class="btn btn-primary mx-auto" >Update</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
