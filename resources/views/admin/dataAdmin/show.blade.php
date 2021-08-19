@extends('layouts.app', ['title'=>'Data Admin'])
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
              <div class="card card-user">
                <div class="card-header">
                  <h5 class="card-title ml-2">Data Admin</h5>
                </div>
                <div class="card-body pr-5 pl-5">
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Nama <i class="text-warning">( *wajib )</i></label>
                          <input disabled name="nama" type="text" class="form-control" placeholder="" value="{{ old('nama') ? old('nama') : $admin->nama }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>NIP <i class="text-warning">( *wajib )</i></label>
                          <input disabled name="nip" type="number" class="form-control" placeholder="" value="{{ old('nip') ? old('nip') : $admin->nip }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>NUPTK</label>
                          <input disabled name="nuptk" type="number" class="form-control" value="{{ old('nuptk') ? old('nuptk') : $admin->nuptk }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis kelamin <i class="text-warning">( *wajib )</i></label>
                          <select disabled name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            <option disabled>pilih...</option>
                            <option {{ $admin->jenis_ptk == "laki-laki" ? "selected" : "" }} value="laki-laki">laki-laki</option>
                            <option {{ $admin->jenis_ptk == "perempuan" ? "selected" : "" }} value="perempuan">perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Status Kepegawaian <i class="text-warning">( *wajib )</i></label>
                          <input disabled name="status_pegawai" type="text" class="form-control" placeholder="" value="{{ old('status_pegawai') ? old('status_pegawai') : $admin->status_pegawai }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label for="jenis_ptk">Jenis ptk <i class="text-warning">( *wajib )</i></label>
                          <input disabled name="jenis_ptk" type="text" class="form-control" placeholder="" value="{{ old('jenis_ptk') ? old('jenis_ptk') : $admin->jenis_ptk }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Tugas tambahan</label>
                          <input disabled name="tugas_tambahan" type="text" class="form-control" value="{{ old('tugas_tambahan') ? old('tugas_tambahan') : $admin->tugas_tambahan }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <a href="{{ route('dataAdmin') }}" class="btn btn-danger mx-auto" style="width: 20%">Kembali</a>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
