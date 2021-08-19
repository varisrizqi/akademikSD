@extends('layouts.app', ['title'=>'Tambah Data Admin', 'livewire'=>true])
@section('content')
<div class="content">
    <div class="row">
        @livewire('edit-kelas', ['kelas' => $kelas])
        @livewire('kelas.cari-siswa', ['siswa' => $kelas->siswa->toArray()])
    </div>
</div>
@endsection
