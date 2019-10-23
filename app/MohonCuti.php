<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class MohonCuti extends Authenticatable
{
    protected $table = 'mohon_cuti';
    protected $primaryKey = 'id_mohon_cuti';

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'id_user');
    }
    

}
