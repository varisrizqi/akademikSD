@extends('layouts.app', ['title'=>'Tambah Data Admin'])
@section('content')
<div class="content">
    <div class="info bg-white p-5">
        <div class="d-flex justify-content-between">
            <div>
                <h4 class="info-title">{{ $kelas->kelas }} Tahun akademik {{ date('Y',strtotime($kelas->tahun_akademik)) }}</h4>
                <h5 class="info-title">Wali kelas {{ $kelas->guru->nama }}</h5>
            </div>
            <div class="pt-5">
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Kelola kelas
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="{{ route('kelas.edit', $kelas->id) }}">Edit kelas</a>
                      <a class="dropdown-item" href="{{ route('pelajaran.create', $kelas->id) }}">Tambah pelajaran</a>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <h5 class="text-center">Jadwal pelajaran</h5>
        <div class="table-responsive">
            <table class="table"> 
                <thead class=" text-primary"> 
                    <tr>
                        <th> Hari </th> 
                        <th> Jam </th> 
                        <th> Pelajaran </th> 
                        <th> Guru </th> 
                        <th class="text-center"> Aksi </th> 
                    </tr>
                </thead> 
                <tbody> 
                    @forelse ($kelas->pelajaran as $pelajaran)
                    <tr>
                        <td>{{ $pelajaran->hari }}</td>
                        <td>{{ $pelajaran->jam_masuk }} - {{ $pelajaran->jam_keluar }}</td>
                        <td>{{ $pelajaran->mata_pelajaran }}</td>
                        <td>{{ $pelajaran->guru->nama }}</td>
                        <td class="text-center"><a type="button" href="{{ route('pelajaran.edit', $kelas->id) }}" class="btn btn-warning  btn-sm">Edit</a> 
                            <form action="{{ route('pelajaran.destroy', $pelajaran->id) }}" method="POST" style="display: inline-block">
                                @csrf
                                @method('delete')
                                <button  class="btn btn-danger btn-sm" role="button" aria-disabled="true">hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>KOSONG</td>
                        <td>KOSONG</td>
                        <td>KOSONG</td>
                        <td>KOSONG</td>
                        <td>KOSONG</td>
                    </tr>
                    @endforelse
                </tbody> 
            </table> 
        </div>

        <br>
        <br>
        <h5 class="text-center">Daftar Siswa</h5>
        <div class="table-responsive">
            <table class="table"> 
                <thead class="text-primary"> 
                    <tr>
                        <th> Nama </th> 
                        <th> NIPD </th> 
                        <th> NISN </th> 
                        <th> Jenis Kelamin </th>
                        <th> Rombel </th>
                        <th class="text-center"> Aksi </th>
                    </tr>
                </thead> 
                <tbody> 
                        @forelse ($kelas->siswa as $siswa)
                        <tr>
                            <td>{{$siswa->nama}}</td>
                            <td>{{$siswa->nipd}}</td>
                            <td>{{$siswa->nisn}}</td>
                            <td>{{$siswa->jenis_kelamin}}</td>
                            <td>{{$siswa->rombel}}</td>
                            <td class="text-center"><a type="button" href="" class="btn btn-success  btn-sm">Rapot Siswa</a></td>
                        </tr>
                        @empty
                        <tr>
                            <td>KOSONG</td>
                            <td>KOSONG</td>
                            <td>KOSONG</td>
                            <td>KOSONG</td>
                            <td>KOSONG</td>
                            <td>KOSONG</td>
                        </tr>
                        @endforelse
                </tbody> 
            </table> 
        </div>
    </div>
    
    <div class="info bg-white p-5">
</div>
@endsection