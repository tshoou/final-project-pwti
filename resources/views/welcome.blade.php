@extends('layouts.master')
@section('title', 'KliniKita | Beranda')
@section('content')
<div class="main-header d-flex align-items-center container">
  <div class="row">
  <div class="col-md-6 d-flex align-items-center justify-content-center">
      <div class="img">
        <img
          src="{{asset('assets/img/hero1.jpeg')}}"
          alt=""
        />
      </div>
    </div>
    <div class="col-md-6 d-flex flex-column justify-content-center my-4">
      <h3 class="text-blue">Welcome to KliniKita!</h3>
      <h1 class="title">Your Reliable Healthcare Center</h1>
      <p class="desc ">
      At Our Clinic, we are committed to providing high-quality healthcare services to all our patients. We are a clinic led by a team of trained and experienced medical professionals, equipped with modern facilities that adhere to international standards.
      </p>
      <div class="button">
        <a href="{{route('webprofil.dokter')}}" class="btn main-button mt-3">View Doctor</a>
      </div>
    </div>
  </div>
</div>
<div class="about container">
  <div class="row">
    
    <div class="col-md-6">
      <div class="titlee d-flex">
        <div class="line"></div>
        <p class="title-section text-orange">About Us</p>
      </div>
      <h1 class="title">Klinik Reovelnt</h1>
      <p class="desc-section">
      We invite you to visit Our Clinic and experience excellent healthcare services. Our team is ready to serve you with care and professionalism. Feel free to contact us or schedule an appointment through our website.

We hope to help you achieve optimal health and provide the best possible care. Thank you for entrusting your health to Our Clinic.
      </p>
      <div class="tabulation-2 mt-4">
        <ul class="nav nav-pills nav-fill d-md-flex d-block">
          <li class="nav-item mb-md-0 mb-2">
            <a class="nav-link active py-2" data-toggle="tab" href="#home1"
              >Misi</a
            >
          </li>
          <li class="nav-item px-lg-2 mb-md-0 mb-2">
            <a class="nav-link py-2" data-toggle="tab" href="#home2"
              >Visi</a
            >
          </li>
        </ul>
        <div class="tab-content mt-4">
          <div class="tab-pane container active" id="home1">
            <p>Memberikan layanan kesehatan komprehensif dengan fokus pada pasien dan membangun manusia</p>
          </div>
          <div class="tab-pane container fade" id="home2">
            <p>Menjadi Partner Layanan Kesehatan Kebanggaan Nasional.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="img-about">
        <img src="{{asset('assets/img/locations-bwh-main_700x400.jpg')}}" alt="" />
      </div>
    </div>
  </div>
</div>
<div class="layanan align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-5">
          <div
            class="card-body d-flex justify-content-between align-items-center "
          >
            <div class="left">
              <p class="title-card">Layanan darurat</p>
              <p class="desc-card">+62(12) 8726 661</p>
            </div>
            <div class="right">
              <i class="fas fa-phone-volume"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-5">
          <div
            class="card-body d-flex justify-content-between align-items-center"
          >
            <div class="left">
              <p class="title-card">Buka</p>
              <p class="desc-card">
                <span>7.00AM - 10.00PM</span>
              </p>
            </div>
            <div class="right">
              <i class="fab fa-openid"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-5">
          <div
            class="card-body d-flex justify-content-between align-items-center"
          >
            <div class="left">
              <p class="title-card">Dokter</p>
              <p class="desc-card">10++</p>
            </div>
            <div class="right">
              <i class="fas fa-user-md"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="about location container mb-5">
  <div class="row">
    <div class="col-md-6 d-flex flex-column justify-content-center">
      <div class="titlee d-flex">
        <div class="line"></div>
        <p class="title-section text-blue">alamat</p>
      </div>
      <h1 class="title">Lokasi</h1>
      <p class="desc-section">
      Jl. Veteran, Ketawanggede, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145, Indonesia
      </p>
    </div>
    <div class="col-md-6">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15805.541955050767!2d112.59360182779142!3d-7.959054871886534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827f2d620975%3A0xf19b7459bbee5ed5!2sUniversitas%20Brawijaya!5e0!3m2!1sen!2sus!4v1686815503582!5m2!1sen!2sus" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</div>
@endsection