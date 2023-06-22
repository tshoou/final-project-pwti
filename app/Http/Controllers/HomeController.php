<?php

namespace App\Http\Controllers;
use App\Pegawai;
use App\Pasien;
use App\Dokter;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function resepsionistHome()
    {
        return view('resepsionist/home');
    }
    public function adminHome()
    {
        $listPegawai = Pegawai::whereNotIn('id_golongan', ['3'])->paginate(10);
        $listPasien = Pasien::get();
        $listDokter = Dokter::get();
        return view('admin/adminHome', ['Pegawai' => $listPegawai, 'Pasien' => $listPasien, 'Dokter' => $listDokter]);
    }
    public function dokterhome()
    {
        return view('dokter/index');
    }
    public function kasirhome()
    {
        return view('kasir/index');
    }
}
