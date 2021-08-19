@extends('layouts.app', ['title'=>'Data Siswa'])
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <h4 class="card-title text-center">Table Data Siswa</h4>
                @if(session('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('message')}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif
                <div class="d-flex justify-content-between">
                    <a href="{{ route('dataSiswa.create') }}" class="btn btn-secondary btn-sm" role="button">Tambah Siswa</a>
                    <form action="{{ route('dataSiswa') }}" method="get" role="search">
                      @csrf
                        <div class="input-group no-border">
                          <input name="search" type="text" autocomplete="off" value="" class="form-control" placeholder="Cari...">
                          <div class="input-group-append">
                            <button class="input-group-text">
                              <i class="nc-icon nc-zoom-split"></i>
                            </button>
                          </div>
                        </div>
                    </form>
                </div>
              </div>
              <div class="card mt-2 p-3">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr><th>
                          Nama
                        </th>
                        <th>
                          NIPD
                        </th>
                        <th>
                          NISN
                        </th>
                        <th>
                          Jenis Kelamin
                        </th>
                        <th>
                          Rombel
                        </th>
                        </th>
                        <th class="text-center">
                          Aksi
                        </th>
                      </tr></thead>
                      <tbody>
                        @forelse ($siswa as $data)
                          <tr>
                            <td>
                              {{ $data->nama }}
                            </td>
                            <td>
                              {{ $data->nipd }}
                            </td>
                            <td>
                              {{ $data->nisn }}
                            </td>
                            <td>
                              {{ $data->jenis_kelamin }}
                            </td>
                            <td >
                              {{ $data->rombel_saat_ini }}
                            </td>
                            <td class="text-center">
                              <a href="{{ route('dataSiswa.show', $data->id) }}" class="btn btn-primary btn-sm" role="button" aria-disabled="true">lihat</a>
                              <a href="{{ route('dataSiswa.edit', $data->id) }}" class="btn btn-warning btn-sm" role="button" aria-disabled="true">edit</a>
                              <form action="{{ route('dataSiswa.destroy', $data->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button  class="btn btn-danger btn-sm" role="button" aria-disabled="true">hapus</button>
                              </form>
                            </td>
                          </tr>
                        @empty
                            <h4 class="text-center">Tidak Ada Data</h4>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="d-flex justify-content-center">
                {{ $siswa->withQueryString()->links() }}
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
