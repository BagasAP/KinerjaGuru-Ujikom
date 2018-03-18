<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TepatMengumpulkanTugas;
use App\KetuntasanNilaiSiswa;
use App\PengumpulanHasilSiswa;
use App\AkhlakDanKepribadian;
use App\PengumpulanHasilUlangan;
use App\AgendaGuru;
class KetuntasanNilaiController extends Controller
{
    //
    public function index()
    {
    	$tugas = TepatMengumpulkanTugas::all();
    	$nilaisiswa = KetuntasanNilaiSiswa::all();
    	$hasilsiswa = PengumpulanHasilSiswa::all();
    	$akhlakdankepribadian = AkhlakDanKepribadian::all();
    	$ulangan = PengumpulanHasilUlangan::all();
    	$agenda = AgendaGuru::all();
    	return view('pages.ketuntasannilai.ketuntasannilai', compact('tugas','nilaisiswa','hasilsiswa','akhlakdankepribadian','ulangan','agenda'));
    }
}
