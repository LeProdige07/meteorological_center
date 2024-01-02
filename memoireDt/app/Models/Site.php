<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    public function monitorings(){
        return $this->hasMany(Monitoring::class, 'site_id','id');
    }
}
