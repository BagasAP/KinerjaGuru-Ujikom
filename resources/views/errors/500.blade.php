@extends('layouts.errors')

@section('title')
	500 Errors
@endsection

@section('content')

<div class="container-alt">
    <div class="row">
        <div class="col-sm-12 text-center">

            <div class="wrapper-page">
                <img src="{{ url('assets/images/animat-rocket-color.gif') }}" alt="" height="120">
                <h1 style="font-size: 78px;">500</h1>
                <h4 class="text-uppercase text-danger">Maaf, Terjadi Kesalahan Pada Aplikasi Anda</h3>

                @guest
                <a class="btn btn-success waves-effect waves-light m-t-20" href="{{ url('/') }}"> return Home</a>
                @else
                <a class="btn btn-success waves-effect waves-light m-t-20" href="{{ url('/home') }}"> Kembali</a>

                @endguest
            </div>

        </div>
    </div>
</div>

@endsection
