@extends('layouts.app')

@section('content')
    <div class="my-auto mx-auto">
        <div class="row justify-content-center">
            <div class="col-md-10 my-2">
                <div class="">
                    <div class="card-header text-center display-5">{{ __('TABLEAU') }}</div>
                    <hr>
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
                            <th>{{ $monitoring->temperature }} °C</th>
                            <th>{{ $monitoring->humidite }} %</th>
                            <th>{{ $monitoring->pression_atm }} hPa</th>
                            <th>
                                @if ($monitoring->luminosite < 3)
                                    11+ : Extreme (Evitez toute exposition au soleil si possible.)
                                @elseif ($monitoring->luminosite >= 3 && $monitoring->luminosite < 6)
                                    10 : Très élevé (Limitez l'exposition au soleil)
                                @elseif ($monitoring->luminosite >= 6 && $monitoring->luminosite < 8)
                                    7 : Elevé (Evitez une exposition prolongée au soleil)
                                @elseif ($monitoring->luminosite >= 8 && $monitoring->luminosite < 11)
                                    5 : Modéré (Utilisez une protection contre le soleil)
                                @else
                                    2 : Faible (Prendre des précautions si nécessaire)
                                @endif
                            </th>
                            <th>
                                @if ($monitoring->detection_pluie == 0)
                                    Il pleut.
                                @else
                                    Pas de pluie.
                                @endif
                            </th>
                            <th>{{ $monitoring->precipitation }} mm</th>
                            <th>{{ $monitoring->vitesse_vent }} Km/h</th>
                            <th>
                                @if ($monitoring->direction_vent >= 2700 && $monitoring->direction_vent <= 2800)
                                    Nord
                                @elseif ($monitoring->direction_vent >= 1600 && $monitoring->direction_vent <= 1700)
                                    Nord-Est
                                @elseif ($monitoring->direction_vent >= 200 && $monitoring->direction_vent <= 300)
                                    Est
                                @elseif ($monitoring->direction_vent >= 500 && $monitoring->direction_vent <= 600)
                                    Sud-Est
                                @elseif ($monitoring->direction_vent >= 900 && $monitoring->direction_vent <= 1000)
                                    Sud
                                @elseif ($monitoring->direction_vent >= 2200 && $monitoring->direction_vent <= 2300)
                                    Sud-Ouest
                                @elseif ($monitoring->direction_vent >= 3400 && $monitoring->direction_vent <= 3500)
                                    Ouest
                                @elseif ($monitoring->direction_vent >= 3100 && $monitoring->direction_vent <= 3200)
                                    Nord-Est
                                @endif
                            </th>
                            <th>{{ $monitoring->qualite_air }} ppm, Bonne</th>
                            <th>{{ $monitoring->temperature_ressentie }} °C</th>
                            <th>{{ $monitoring->pointe_rosee }} °C</th>
                            <th>{{ $monitoring->created_at }}</th>
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
