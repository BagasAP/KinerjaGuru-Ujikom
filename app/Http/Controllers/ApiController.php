<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RekapNilai;
use App\GuruPengajar;
class ApiController extends Controller
{
    //
    public function listdata()
    {
    	return RekapNilai::with('guru')->get();
    }
}
