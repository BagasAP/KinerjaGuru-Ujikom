<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kelas;
use App\Mapel;
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
use App\RekapNilai;
class GuruPengajar extends Model
{


    public function mapel()
    {
    	return $this->hasMany(Mapel::class);
    }

     public function kelas()
    {
    	return $this->hasMany(Kelas::class);
    }

    public function administrasi()
	{
		return $this->hasMany(Administrasi::class, 'guru_id');
	}

	public function konsultasi()
	{
		return $this->hasMany(Konsultasi::class, 'guru_id');
	}

	public function observasi()
	{
		return $this->hasMany(Observasi::class, 'guru_id');
	}

	public function izin()
	{
		return $this->hasMany(Izin::class, 'guru_id');
	}

	public function alfa()
	{
		return $this->hasMany(Alfa::class, 'guru_id');
	}

	public function terlambatkekelas()
	{
		return $this->hasMany(KeterlambatanKeKelas::class, 'guru_id');
	}

	public function kegiatanunitdanyayasan()
	{
		return $this->hasMany(UnitDanYayasan::class, 'guru_id');
	}

	public function kegiatandoapagi()
	{
		return $this->hasMany(KegiatanDoaPagi::class, 'guru_id');
	}

	public function indisipliner()
	{
		return $this->hasMany(Indisipliner::class, 'guru_id');
	}

	public function tepatmengumpulkantugas()
	{
		return $this->hasMany(TepatMengumpulkanTugas::class, 'guru_id');
	}

	public function penampilan()
	{
		return $this->hasMany(Penampilan::class, 'guru_id');
	}

	public function tugasmengawas()
	{
		return $this->hasMany(TugasMengawas::class, 'guru_id');
	}

	public function komunikasi()
	{
		return $this->hasMany(Komunikasi::class, 'guru_id');
	}

	public function ghibah()
	{
		return $this->hasMany(Ghibah::class, 'guru_id');
	}

	public function cepattanggapdansupport()
	{
		return $this->hasMany(CepatTanggapDanSupport::class, 'guru_id');
	}

	public function pengelolaanemosi()
	{
		return $this->hasMany(PengelolaanEmosi::class, 'guru_id');
	}

	public function komentardanstatusmedsos()
	{
		return $this->hasMany(KomentarDanStatusMedsos::class, 'guru_id');
	}

	public function ketuntasannilaisiswa()
	{
		return $this->hasMany(KetuntasanNilaiSiswa::class, 'guru_id');
	}

	public function pengumpulanhasilulangan()
	{
		return $this->hasMany(PengumpulanHasilUlangan::class, 'guru_id');
	}

	public function akhlakdankepribadian()
	{
		return $this->hasMany(AkhlakDanKepribadian::class, 'guru_id');
	}

	public function pengumpulanhasilsiswa()
	{
		return $this->hasMany(PengumpulanHasilSiswa::class, 'guru_id');
	}

	public function agendaguru()
	{
		return $this->hasMany(AgendaGuru::class, 'guru_id');
	}

	public function rekapnilai()
	{
		return $this->hasMany(RekapNilai::class, 'guru_id');
	}

	protected $casts = [
        'kelas' => 'array',
        'mapel' => 'array',
    ];
}
