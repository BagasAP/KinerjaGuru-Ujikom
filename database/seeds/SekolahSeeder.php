<?php

use Illuminate\Database\Seeder;
use App\Sekolah;
class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Sekolah::truncate();

    	$sekolah = array(
			array( // row #0
				'id' => 1,
				'nama_sekolah' => 'SMK Assalaam Bandung',
				'nss' => '402,020,826,071',
				'status' => 'swasta',
				'nama_kepsek' => 'H.M. Luthfi Almanfaluthi,S.T',
				'alamat' => 'Jl. Situtarate Cibaduyut, Kabupaten Bandung , Jawa Barat',
				'telepon' => '(022) 5420220',
			)
		);


		foreach ($sekolah as $tb_sekolah) {
			Sekolah::create($tb_sekolah);
		}
    }
}
