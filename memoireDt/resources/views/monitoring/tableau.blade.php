@extends('layouts.app')

@section('content')
    <div class="my-auto mx-auto">
        <div class="row justify-content-center">
            <div class="col-md-10 my-2">
                <div class="">
                    <div class="card-header text-center display-5">{{ __('TABLEAU') }}</div><hr>
                    {{-- <br> --}}
                    <div class="container text-center">
                        <a href="{{ url('/details/' . $site->id) }}" class="btn btn-primary">Retour </a>
                    </div>
                    <br>
                </div>
            </div>
            {{-- <br> --}}
        </div>
        <div class="row justify-content-center mx-3">

            <table class="table table-secondary">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Température</th>
                        <th scope="col">Humidité</th>
                        <th scope="col">Pression Atmosphérique</th>
                        <th scope="col">Indice UV</th>
                        <th scope="col">Detection de pluie</th>
                        <th scope="col">Precipitation</th>
                        <th scope="col">Vitesse du vent</th>
                        <th scope="col">Direction du vent</th>
                        <th scope="col">Qualité de l'air</th>
                        <th scope="col">Température ressentie</th>
                        <th scope="col">Pointe de rosée</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($monitorings as $key => $monitoring)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <th>{{$monitoring->temperature}} °C</th>
                            <th>{{$monitoring->humidite}} %</th>
                            <th>{{$monitoring->pression_atm}} hPa</th>
                            <th>{{$monitoring->luminosite}}</th>
                            <th>{{$monitoring->detection_pluie}}</th>
                            <th>{{$monitoring->precipitation}}</th>
                            <th>{{$monitoring->vitesse_vent}} Km/h</th>
                            <th>{{$monitoring->direction_vent}}</th>
                            <th>{{$monitoring->qualite_air}} ppm, Bonne</th>
                            <th>{{$monitoring->temperature_ressentie}} °C</th>
                            <th>{{$monitoring->pointe_rosee}} °C</th>
                            <th>{{$monitoring->created_at}}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="container text-center">
            <a href="{{ url('/details/' . $site->id) }}" class="btn btn-primary display-6">Retour </a>
        </div><br> --}}
    </div>
@endsection
