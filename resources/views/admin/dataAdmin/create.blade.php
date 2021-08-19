@extends('layouts.app', ['title'=>'Tambah Data Admin'])
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
              <div class="card card-user">
                <div class="card-header">
                  <h5 class="card-title ml-2">Tambah Data Admin</h5>
                </div>
                <div class="card-body pr-5 pl-5">
                  <form action="{{ route('dataAdmin.store') }}" method="POST">
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
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label for="jenis_kelamin">Jenis kelamin <i class="text-warning">( *wajib )</i></label>
                          <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            <option disabled>pilih...</option>
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                          </select>
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Status Kepegawaian <i class="text-warning">( *wajib )</i></label>
                          <input name="status_pegawai" type="text" class="form-control" placeholder="" value="{{ old('status_pegawai') }}">
                        </div>
                      </div>
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label for="jenis_ptk">Jenis ptk <i class="text-warning">( *wajib )</i></label>
                          <input name="jenis_ptk" type="text" class="form-control" placeholder="" value="{{ old('jenis_ptk') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 px-1">
                        <div class="form-group">
                          <label>Tugas tambahan</label>
                          <input name="tugas_tambahan" type="text" class="form-control" value="{{ old('tugas_tambahan') }}">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <a href="{{ route('dataAdmin') }}" class="btn btn-danger mx-auto" style="width: 20%">Batal</a>
                      <button type="submit" class="btn btn-primary mx-auto" style="width: 20%">Tambah</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
