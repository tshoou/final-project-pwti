@extends('resepsionist.layouts.master')
@section('title', 'KliniKita')
@section('section-header')
    <h1>Gedung</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{route('resepsionist.home')}}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="#">Gedung</a></div>
      </div>
@endsection
@section('content')
<div class="section-body">
    <h2 class="section-title">Data Gedung</h2>
            <p class="section-lead">
              Data
            </p>
    <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
                <div class="card-body">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible show fade">
                        <div class="alert-body">
                            <button class="close" data-dismiss="alert">
                                <span>×</span>
                            </button>
                            {{session('message')}}
                        </div>
                    </div>
              @endif
              <div class="row">
                <div class="col-md-6">
                </div>
              <div class="col-md-6">
                <form action="{{route('resepsionist.gedung.search')}}" method="get">
                  <div class="input-group">
                    <input type="search" class="form-control" name="search">
                    <span class="input-group-prepend">
                      <button type="submit" class="btn btn-primary">Cari</button>
                    </span>
                    <span class="input-group-prepend" style="position: relative; z-index: 0">
                      <a href="{{route('resepsionist.gedung')}}" class="btn btn-warning">Reset</a>
                    </span>
                  </div>
                </form>
                </div>
              </div>
                <hr>
              <table class="table" id="data">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Gedung</th>
                        <th scope="col">Lantai</th>
                        <th scope="col">Tanggal Berdiri</th>
                    </tr>
                </thead>
                <tbody style="text-transform: capitalize;">
                @foreach ($Gedung as $no => $ge)
                <tr>
                    <th> {{$Gedung->firstItem()+$no}}</th>
                    <th> {{$ge->nama_gedung}}</th>
                    <th>{{$ge->lantai}}</th> 
                    <th>{{$ge->tgl_berdiri}}</th>
                </tr>
                @endforeach
                </tbody>
                </table>
                {{$Gedung->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('page-script')
<script src="//cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endpush