@extends('layouts.app', ['title'=>'Edit Pelajaran kelas'])
@section('content')
    <div class="content">
        <div class="card card-plain">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title ml-2">Edit Pelajaran kelas ({{ $kelas->kelas }} tahun akademik {{ date('Y',strtotime($kelas->tahun_akademik)) }})</h5>
              </div>
              <div class="card-body pr-5 pl-5">
                <form method="POST" action="{{ route('pelajaran.store', $kelas->id) }}">
                  @csrf
                  @method('POST')
                  <div class="row">
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Mata pelajaran</label>
                        <input name="mata_pelajaran" type="text" class="form-control" placeholder=""  value="{{ old('mata_pelajaran') ? old('mata_pelajaran') : $pelajaran->mata_pelajaran }}">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Hari</label>
                        <input name="hari" type="text" class="form-control" placeholder="" value="{{ old('hari') ? old('hari') : $pelajaran->hari }}">
                      </div>
                    </div>
                    <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Guru</label>
                        <select name="guru_id" class="form-control">
                          @forelse ($guru as $g)
                            @if ($g->id == $kelas->guru_id)
                              <option selected value="{{ $g->id }}">{{ $g->nama }}</option>
                            @else
                              <option value="{{ $g->id }}">{{ $g->nama }}</option> 
                            @endif
                          @empty
                            <option disabled>tidak ada guru</option>
                          @endforelse
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Jam masuk</label>
                        <input name="jam_masuk" type="time" class="form-control" value="{{old('jam_masuk') ? old('jam_masuk') : $pelajaran->jam_masuk }}" >
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label>Jam keluar</label>
                        <input name="jam_keluar" type="time" class="form-control" value="{{ old('jam_keluar') ? old('jam_keluar') : $pelajaran->jam_keluar }}">
                      </div>
                    </div>
                  </div> 
                  <button type="submit" class="btn btn-primary">Simpan</button>                  
                  <a type="button" class="btn btn-danger" href="javascript:history.back()">Batal</a>                 
                </form>
              </div>
            </div>
          </div>
    </div>
@endsection