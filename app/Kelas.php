<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\GuruPengajar;
use App\GuruInti;
class Kelas extends Model
{
    //
    public function guru()
	{
		return $this->belongsTo(GuruPengajar::class);
	}

	public function guruinti()
	{
		return $this->belongsTo(GuruInti::class);
	}
}
