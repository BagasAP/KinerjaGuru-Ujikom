@extends('layouts.master')
@section('title')
Dashboard
@endsection
@section('content')
<div class="container">
<div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <center>
              <span class="info-box-text"><marquee>Guru Pengajar</marquee></span>
              @php
              $pengajar = App\GuruPengajar::all();
              @endphp
              <span class="info-box-number">{{$pengajar->count()}}</span>
              </center>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-users"></i></span>

            <div class="info-box-content">
              <center>
              <span class="info-box-text"><marquee>Guru Inti</marquee></span>
              @php
              $inti = App\GuruInti::all();
              @endphp
              <span class="info-box-number">{{$inti->count()}}</span>
            </center>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-tasks"></i></span>

            <div class="info-box-content">
              <center>
              <span class="info-box-text"><marquee>Penilaian</marquee></span>
              @php
              $nilai = App\RekapNilai::all();
              @endphp
              <span class="info-box-number">{{$nilai->count()}}</span>
            </center>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-file-text"></i></span>

            <div class="info-box-content">
              <center>
              <span class="info-box-text"><marquee>Laporan</marquee></span>
              @php
              $laporan = App\RekapNilai::all();
              @endphp
              <span class="info-box-number">{{$laporan->count()}}</span>
            </center>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
</div>
@endsection