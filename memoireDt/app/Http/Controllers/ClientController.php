<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Models\Site;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function welcome()
    {
        $sites = Site::all();
        return view('welcome', compact('sites'));
    }
    public function show($id)
    {
        $site = Site::find($id);

        $monitorings = Monitoring::where('site_id', $id)
            ->orderBy('created_at', 'desc')
            ->first();

        return view('monitoring.index', compact('site', 'monitorings'));
    }
    public function graphiques($id)
    {
        $site = Site::find($id);
        // $monitorings = Monitoring::where('site_id', $id)
        // ->orderBy('created_at', 'desc')
        // ->get();

        $humidite = Monitoring::selectRaw('created_at, humidite')
            ->groupBy('created_at', 'humidite')
            ->orderBy('created_at', 'asc')
            ->where('logette_id', $id)
            ->pluck('humidite', 'created_at');
        $labels = $humidite->keys();
        $humidite_data = $humidite->values();

        $temperature = Monitoring::selectRaw('created_at, temperature')
            ->groupBy('created_at', 'temperature')
            ->orderBy('created_at', 'asc')
            ->where('logette_id', $id)
            ->pluck('temperature', 'created_at');
        $temperature_data = $temperature->values();

        $vitesse_vent = Monitoring::selectRaw('created_at, vitesse_vent')
            ->groupBy('created_at', 'vitesse_vent')
            ->orderBy('created_at', 'asc')
            ->where('logette_id', $id)
            ->pluck('vitesse_vent', 'created_at');
        $vitesse_vent_data = $vitesse_vent->values();

        $temperature_ressentie = Monitoring::selectRaw('created_at, temperature_ressentie')
            ->groupBy('created_at', 'temperature_ressentie')
            ->orderBy('created_at', 'asc')
            ->where('logette_id', $id)
            ->pluck('temperature_ressentie', 'created_at');
        $temperature_ressentie_data = $temperature_ressentie->values();


        return view('monitoring.graphique', compact('site', 'temperature_ressentie_data', 'vitesse_vent_data', 'temperature_data', 'humidite_data', 'labels'));
    }
    public function tableau($id)
    {
        $site = Site::find($id);
        $monitorings = Monitoring::where('site_id', $id)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('monitoring.tableau', compact('site', 'monitorings'));
    }
}
