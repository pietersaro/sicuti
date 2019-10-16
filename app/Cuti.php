<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Cuti extends Authenticatable
{
    protected $table = 'cuti';
    protected $primaryKey = 'id_cuti';

    public function user()
    {
        return $this->hasOne('App\User', 'id_user', 'id');
    }
}
