@extends('layouts.app', ['title'=>'Tambah Data Admin', 'livewire'=>true])
@section('content')
<div class="content">
    <div class="row">
        @livewire('kelas.create-kelas')
        @livewire('kelas.cari-siswa')
    </div>
</div>
@endsection
