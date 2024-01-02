<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Monitoring extends Model
{
    use HasFactory;

    protected $fillable = [
        'temperature',
        'humidite',
        'pression_atm',
        'luminosite',
        'detection_pluie',
        'precipitation',
        'vitesse_vent',
        'direction_vent',
        'qualite_air',
        'temperature_ressentie',
        'pointe_rosee',
        'site_id',
    ];

    public function site(){
        return $this->belongsTo(Site::class, 'site_id', 'id');
    }
}
