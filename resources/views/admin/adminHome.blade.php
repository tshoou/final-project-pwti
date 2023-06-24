@extends('admin.layouts.master')
@section('title', 'KliniKita')
@section('section-header')
    <h1>Dashboard</h1>
@endsection
@section('content')
<div class="section-body">
    <div class="row">
      <div class="col-12 mb-4">
        <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="{{asset('assets/img/unsplash/andre-benz-1214056-unsplash.jpg')}}">
          <div class="hero-inner">
            <h2 class="text-capitalize">Hello, {{ Auth::user()->pegawai()->first()->nama }} </h2>
              <p class="lead">Jika anda baru terdaftar, Atur profil anda terlebih dahulu</p>
              <div class="mt-4">
                  <a href="{{route('admin.profil', Auth::user()->id_pegawai)}}" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Cek Profil</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>    
    <div class="row">
    <div class="col-12 d-flex">
      <div class="card mx-2 w-75">
        <div class="card-header">
          <h4>Total Pegawai</h4>
        </div>
        <div class="card-body">
          <div class="empty-state">
            <div class="empty-state-icon">
              <h1 class="text-white">{{$Pegawai->count()}}</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="card mx-2 w-75">
        <div class="card-header">
          <h4>Total Pasien</h4>
        </div>
        <div class="card-body">
          <div class="empty-state">
            <div class="empty-state-icon">
              <h1 class="text-white">{{$Pasien->count()}}</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="card mx-2 w-75">
        <div class="card-header">
          <h4>Total Dokter</h4>
        </div>
        <div class="card-body">
          <div class="empty-state">
            <div class="empty-state-icon">
              <h1 class="text-white">{{$Dokter->count()}}</h1>
            </div>
          </div>
        </div>
      </div>
      
    </div>
    </div>    
</div>
@endsection
@push('page-script')
    
@endpush