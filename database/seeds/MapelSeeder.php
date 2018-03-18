<?php

use Illuminate\Database\Seeder;
use App\Mapel;
class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Mapel::truncate();

    	$mapel = array(
			array( // row #0
				'id' => 1,
				'mapel' => 'Produktif RPL',
			),
			array( // row #0
				'id' => 2,
				'mapel' => 'Produktif TKR',
			),
			array( // row #0
				'id' => 3,
				'mapel' => 'Produktif TSM',
			),
			array( // row #0
				'id' => 4,
				'mapel' => 'IPA',
			),
			array( // row #0
				'id' => 5,
				'mapel' => 'IPS',
			),
			array( // row #0
				'id' => 6,
				'mapel' => 'PAI',
			),
			array( // row #0
				'id' => 7,
				'mapel' => 'MTK',
			),
			array( // row #0
				'id' => 8,
				'mapel' => 'Bhs. Indonesia',
			),
			array( // row #0
				'id' => 9,
				'mapel' => 'Bhs. Inggris',
			),
			array( // row #0
				'id' => 10,
				'mapel' => 'Seni Budaya',
			),
			array( // row #0
				'id' => 11,
				'mapel' => 'Kimia',
			),
			array( // row #0
				'id' => 12,
				'mapel' => 'Fisika',
			),
			array( // row #0
				'id' => 13,
				'mapel' => 'Kewirausahaan',
			),
			array( // row #0
				'id' => 14,
				'mapel' => 'Penjas',
			),
			array( // row #0
				'id' => 15,
				'mapel' => 'Al-Quran',
			),
			array( // row #0
				'id' => 16,
				'mapel' => 'DKK RPL',
			),
			array( // row #0
				'id' => 17,
				'mapel' => 'DKK TSM',
			),
			array( // row #0
				'id' => 18,
				'mapel' => 'DKK TKR',
			)
		);


		foreach ($mapel as $tb_mapel) {
			Mapel::create($tb_mapel);
		}
    }
}
