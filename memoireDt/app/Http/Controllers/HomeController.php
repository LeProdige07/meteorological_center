<?php

namespace App\Http\Controllers;

use App\Models\Monitoring;
use App\Models\Site;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sites = Site::all();


        return view('home')->with('sites',$sites);
    }

    public function create(){
        return view('sites.create');
    }

    public function store(Request $request){
        $sites = new Site();
        
        $sites->name = $request->input('name');
        $sites->ville = $request->input('ville');
        $sites->commune = $request->input('commune');
        $sites->quartier = $request->input('quartier');

        $sites->save();

        return redirect(url('/home'))->with('status', 'le site à été crée avec succès');
    }

    public function show($id){
        $site = Site::find($id);

        $monitorings = Monitoring::where('site_id', $id)
            ->orderBy('created_at', 'desc')
            ->first();

        return view('monitoring.index', compact('site', 'monitorings'));
    }

    public function delete($id){
        $site = Site::find($id);

        $site->delete();

        return back();
    }

    public function edit($id){
        $site = Site::find($id);

        return view('sites.edit', compact('site'));
    }

    public function update(Request $request, $id){
        $sites = Site::find($id);
        
        $sites->name = $request->input('name');
        $sites->ville = $request->input('ville');
        $sites->commune = $request->input('commune');
        $sites->quartier = $request->input('quartier');

        $sites->update();

        return redirect(url('/home'))->with('status', 'le site à été modifier avec succès');
    }
}
