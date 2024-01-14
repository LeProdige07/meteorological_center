<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Models\Site;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function welcome(){
        $sites = Site::all();
        return view('welcome', compact('sites'));
    }
    public function show($id){
        $site = Site::find($id);

        $monitorings = Monitoring::where('site_id', $id)
            ->orderBy('created_at', 'desc')
            ->first();

        return view('monitoring.index', compact('site', 'monitorings'));
    }
    public function graphiques($id){
        $site = Site::find($id);
        // $monitorings = Monitoring::where('site_id', $id)
        // ->orderBy('created_at', 'desc')
        // ->get();

        // $row = Monitoring::selectRaw('year(created_at) year, monthname(created_at) month, count(*) data')
        //     ->groupBy('year', 'month')
        //     ->orderBy('year', 'desc')
        //     ->pluck('data', 'month');

        // $labels = $row->keys();
        // $data = $row->values();

        return view('monitoring.graphique', compact('site'));
    }
    public function tableau($id){
        $site = Site::find($id);
        $monitorings = Monitoring::where('site_id', $id)
        ->orderBy('created_at', 'desc')
        ->get();

        return view('monitoring.tableau', compact('site', 'monitorings'));
    }
}
