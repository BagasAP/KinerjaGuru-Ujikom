<?php

use Illuminate\Database\Seeder;
use App\Kelas;
class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kelas::truncate();

    	$kelas = array(
			array( // row #0
				'id' => 1,
				'kelas' => 'X RPL 1',
			),
			array( // row #0
				'id' => 2,
				'kelas' => 'XI RPL 1',
			),
			array( // row #0
				'id' => 3,
				'kelas' => 'XII RPL 1',
			),
			array( // row #0
				'id' => 4,
				'kelas' => 'X RPL 2',
			),
			array( // row #0
				'id' => 5,
				'kelas' => 'XI RPL 2',
			),
			array( // row #0
				'id' => 6,
				'kelas' => 'XII RPL 2',
			),
			array( // row #0
				'id' => 7,
				'kelas' => 'X RPL 3',
			),
			array( // row #0
				'id' => 8,
				'kelas' => 'XI RPL 3',
			),
			array( // row #0
				'id' => 9,
				'kelas' => 'XII RPL 3',
			),
			array( // row #0
				'id' => 10,
				'kelas' => 'X TSM 1',
			),
			array( // row #0
				'id' => 11,
				'kelas' => 'XI TSM 1',
			),
			array( // row #0
				'id' => 12,
				'kelas' => 'XII TSM 1',
			),
			array( // row #0
				'id' => 13,
				'kelas' => 'X TSM 2',
			),
			array( // row #0
				'id' => 14,
				'kelas' => 'XI TSM 2',
			),
			array( // row #0
				'id' => 15,
				'kelas' => 'XII TSM 2',
			),
			array( // row #0
				'id' => 16,
				'kelas' => 'X TSM 3',
			),
			array( // row #0
				'id' => 17,
				'kelas' => 'XI TSM 3',
			),
			array( // row #0
				'id' => 18,
				'kelas' => 'XII TSM 3',
			),
			array( // row #0
				'id' => 19,
				'kelas' => 'X TKR 1',
			),
			array( // row #0
				'id' => 20,
				'kelas' => 'XI TKR 1',
			),
			array( // row #0
				'id' => 21,
				'kelas' => 'XII TKR 1',
			),
			array( // row #0
				'id' => 22,
				'kelas' => 'X TKR 2',
			),
			array( // row #0
				'id' => 23,
				'kelas' => 'XI TKR 2',
			),
			array( // row #0
				'id' => 24,
				'kelas' => 'XII TKR 2',
			),
			array( // row #0
				'id' => 25,
				'kelas' => 'X TKR 3',
			),
			array( // row #0
				'id' => 26,
				'kelas' => 'XI TKR 3',
			),
			array( // row #0
				'id' => 27,
				'kelas' => 'XII TKR 3',
			)
		);


		foreach ($kelas as $tb_kelas) {
			Kelas::create($tb_kelas);
		}
    }
}
