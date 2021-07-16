@extends('login.app', ['title' => 'Login Admin'])

@section('content')
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="{{ asset('img/undraw_cabin_hkfr.svg') }}" class="logo"> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="{{ asset('img/undraw_back_to_school_inwc.svg') }}" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex align-items-center justify-content-around">
                        <a href="{{route('adminLogin')}}">admin login</a>
                        <a href="{{route('guruLogin')}}">siswa login</a>
                        <a href="{{route('guruLogin')}}">guru login</a>                    
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved.</small>
                </div>
            </div>
        </div>
    </div>
@endsection