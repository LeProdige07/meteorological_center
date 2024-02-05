<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Models\Site;
use Illuminate\Http\Request;

class MonitoringController extends Controller
{

    public function index(){
        
    }

    public function store(Request $request,$id){

        $site = Site::find($id);

        if(!$site){
            return response([
                'message' => 'Site introuvable.'
            ], 403);
        }

        $attrs = $request->validate([
            'temperature' => 'required|string',
            'humidite' => 'required|string',
            'pression_atm' => 'required|string',
            'luminosite' => 'required|string',
            'detection_pluie' => 'required|string',
            'precipitation' => 'required|string',
            'vitesse_vent' => 'required|string',
            'direction_vent' => 'required|string',
            'qualite_air' => 'required|string',
            'temperature_ressentie' => 'required|string',
            'pointe_rosee' => 'required|string',
        ]);

        Monitoring::create([
            'temperature' => $attrs['temperature'],
            'humidite' => $attrs['humidite'],
            'pression_atm' => $attrs['pression_atm'],
            'luminosite' => $attrs['luminosite'],
            'detection_pluie' => $attrs['detection_pluie'],
            'precipitation' => $attrs['precipitation'],
            'vitesse_vent' => $attrs['vitesse_vent'],
            'direction_vent' => $attrs['direction_vent'],
            'qualite_air' => $attrs['qualite_air'],
            'temperature_ressentie' => $attrs['temperature_ressentie'],
            'pointe_rosee' => $attrs['pointe_rosee'],
            'site_id' => $id,
        ]);

        return response([
            'message' => 'Parametres du site enregistré avec succès!'
        ], 200);

    }
}
