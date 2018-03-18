<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komunikasi;
use App\Ghibah;
use App\CepatTanggapDanSupport;
use App\PengelolaanEmosi;
use App\KomentarDanStatusMedsos;
use App\Penampilan;
use App\TugasMengawas;
class PelayananPrimaController extends Controller
{
    //
    public function index()
    {
    	$komunikasi = Komunikasi::all();
    	$ghibah = Ghibah::all();
    	$support = CepatTanggapDanSupport::all();
    	$emosi = PengelolaanEmosi::all();
    	$medsos = KomentarDanStatusMedsos::all();
    	$penampilan = Penampilan::all();
    	$mengawas = TugasMengawas::all();
    	return view('pages.pelayananprima.pelayananprima', compact('komunikasi','ghibah','support','emosi','medsos','penampilan','mengawas'));
    }
}
