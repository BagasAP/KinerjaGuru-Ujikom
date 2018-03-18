<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\GuruPengajar;
class KomentarDanStatusMedsos extends Model
{
    //
    public function guru()
    {
    	return $this->belongsTo(GuruPengajar::class, 'guru_id');
    }
}
