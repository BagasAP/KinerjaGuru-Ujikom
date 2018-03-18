<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuruPengajar;
use App\Administrasi;
use App\Konsultasi;
use App\Observasi;
class PerangkatPembelajaranController extends Controller
{
    //
	public function index()
    {
    	$guru = GuruPengajar::all();
    	$administrasi = Administrasi::all();
    	$konsultasi = Konsultasi::all();
    	$observasi = Observasi::all();
    	return view('pages.perangkatpembelajaran.perangkatpembelajaran',compact('guru','administrasi','konsultasi','observasi'));
    }
}
