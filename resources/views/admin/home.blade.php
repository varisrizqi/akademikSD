@extends('layouts.app', ['title'=>'Home'])
@section('content')
<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <h3 class="description">Your content here</h3>
                <form action="{{ route('adminLogout') }}" method="POST">
                    @csrf
                    @method('post')
                    <button type="submit">adminLogout</button>
                </form>
                <form action="{{ route('siswaLogout') }}" method="POST">
                    @csrf
                    @method('post')
                    <button type="submit">siswaLogout</button>
                </form>
                <form action="{{ route('siswaLogout') }}" method="POST">
                    @csrf
                    @method('post')
                    <button type="submit">siswaLogout</button>
                </form>
                @if (Auth::check())
                    login
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
