<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Kelas;
use App\Mapel;
class GuruInti extends Model
{
    //
	public function mapel()
    {
    	return $this->hasMany(Mapel::class);
    }

     public function kelas()
    {
    	return $this->hasMany(Kelas::class);
    }

    public function user() 
    {
        return $this->BelongsTo('App\User', 'id_user');
    }

    protected $casts = [
        'kelas' => 'array',
        'mapel' => 'array',
    ];
}
