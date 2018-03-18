<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sekolah;
use Alert;
class SekolahController extends Controller
{
    //
    public function index()
    {
     $sekolah = Sekolah::all();	
     return view('pages.sekolah', compact('sekolah'));
    }

    public function update(Request $request, $id)
    {
            $sekolah = Sekolah::findOrFail($id);
            $sekolah->nama_sekolah = $request->nama_sekolah;
            $sekolah->nss = $request->nss;
            $sekolah->nama_kepsek = $request->nama_kepsek;           
            $sekolah->alamat = $request->alamat;
            $sekolah->status = $request->status;
            $sekolah->telepon = $request->telepon;
            $sekolah->save();

            return redirect()->route('sekolah.index')->with([Alert::success('Berhasil Mengubah Data Sekolah', 'Data Terubah!')]);
    
    }
}
