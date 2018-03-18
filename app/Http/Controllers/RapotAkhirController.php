<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GuruPengajar;
use App\RekapNilai;
use App\Administrasi;
use App\AgendaGuru;
use App\Alfa;
use App\AkhlakDanKepribadian;
use App\CepatTanggapDanSupport;
use App\Ghibah;
use App\Indisipliner;
use App\Izin;
use App\KegiatanDoaPagi;
use App\KeterlambatanKeKelas;
use App\KetuntasanNilaiSiswa;
use App\KomentarDanStatusMedsos;
use App\Komunikasi;
use App\Konsultasi;
use App\Observasi;
use App\Penampilan;
use App\PengelolaanEmosi;
use App\PengumpulanHasilSiswa;
use App\PengumpulanHasilUlangan;
use App\TepatMengumpulkanTugas;
use App\TugasMengawas;
use App\UnitDanYayasan;
use App\Sekolah;
use Alert;
use Excel;
use DB;
use PDF;
class RapotAkhirController extends Controller
{
    //
    public function index(){
    	$guru = GuruPengajar::all();
     	$rapot = RekapNilai::all();   
     	return view('pages.laporan.rapotakhir', compact('rapot','guru'));
    }

    public function show($id)
    {
        //
        $rapot = RekapNilai::findOrFail($id);
        $sekolah = Sekolah::all();
        return view('pages.laporan.detail_rapot')->with(compact('rapot','sekolah'));
    }

    public function downloadExcel($type)
    {
        $data = RekapNilai::get()->toArray();
        return Excel::create('Laporan Rapot Akhir', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function downloadPDF($id){
      $rapot = RekapNilai::find($id);

      $pdf = PDF::loadView('pages.PDF.rapotguru', compact('rapot'));
      return $pdf->download('Rapot Guru.pdf');
    }

    public function destroy($id)
    {
        
        if (!RekapNilai::destroy($id));
        if (!Administrasi::destroy($id));  
        if (!AgendaGuru::destroy($id));
        if (!Alfa::destroy($id));
        if (!AkhlakDanKepribadian::destroy($id));
        if (!CepatTanggapDanSupport::destroy($id));
        if (!Ghibah::destroy($id));
        if (!Indisipliner::destroy($id));
        if (!Izin::destroy($id)); 
        if (!KegiatanDoaPagi::destroy($id));   
        if (!KeterlambatanKeKelas::destroy($id));   
        if (!KetuntasanNilaiSiswa::destroy($id));
        if (!KomentarDanStatusMedsos::destroy($id));   
        if (!Komunikasi::destroy($id));  
        if (!Konsultasi::destroy($id));     
        if (!Observasi::destroy($id));   
        if (!Penampilan::destroy($id)); 
        if (!PengelolaanEmosi::destroy($id));  
        if (!PengumpulanHasilSiswa::destroy($id));
        if (!PengumpulanHasilUlangan::destroy($id));  
        if (!TepatMengumpulkanTugas::destroy($id));  
        if (!TugasMengawas::destroy($id)); 
        if (!UnitDanYayasan::destroy($id));            
        return redirect()->route('rapotakhir.index')->with([Alert::success('Berhasil Mengapus Semua Data Nilai Guru', 'Data Terhapus!')]);
    }
}
