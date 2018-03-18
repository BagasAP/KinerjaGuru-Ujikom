<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Izin;
use App\Alfa;
use App\KeterlambatanKeKelas;
use App\UnitDanYayasan;
use App\KegiatanDoaPagi;
use App\Indisipliner;
class KedisiplinanController extends Controller
{
    //
    public function index()
    {
    	$izin = Izin::all();
    	$alfa = Alfa::all();
    	$terlambatkelas = KeterlambatanKeKelas::all();
    	$unityayasan = UnitDanYayasan::all();
    	$doapagi = KegiatanDoaPagi::all();
    	$indisipliner = Indisipliner::all();
    	return view('pages.kedisiplinan.kedisiplinan', compact('izin','alfa','terlambatkelas','unityayasan','doapagi','indisipliner'));
    }
}
