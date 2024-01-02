@extends('layouts.app')

@section('content')
    <div class="my-auto mx-auto container">
        <div class="row justify-content-center">
            <div class="col-md-10 my-2">
                <div class="card">
                    <div class="card-header text-center">{{ __('Tableau') }}</div>
                    <br>
                    <div class="container text-center">
                        <a href="{{ url('/details/' . $site->id) }}" class="btn btn-primary">Retour </a>
                    </div>
                    <br>
                </div>
            </div>
            <br>
        </div>
        <br>
        <div class="row justify-content-center">

            <table class="table table-secondary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Température</th>
                        <th scope="col">Humidité</th>
                        <th scope="col">Pression Atmosphérique</th>
                        <th scope="col">Luminosité</th>
                        <th scope="col">Detection de pluie</th>
                        <th scope="col">Precipitation</th>
                        <th scope="col">Vitesse du vent</th>
                        <th scope="col">Qualité de l'air</th>
                        <th scope="col">Température ressentie</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($monitorings as $key => $monitoring)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <th>{{$monitoring->temperature}}</th>
                            <th>{{$monitoring->humidite}}</th>
                            <th>{{$monitoring->pression_atm}}</th>
                            <th>{{$monitoring->luminosite}}</th>
                            <th>{{$monitoring->detection_pluie}}</th>
                            <th>{{$monitoring->precipitation}}</th>
                            <th>{{$monitoring->vitesse_vent}}</th>
                            <th>{{$monitoring->qualite_air}}</th>
                            <th>{{$monitoring->temperature_ressentie}}</th>
                            <th>{{$monitoring->created_at}}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
