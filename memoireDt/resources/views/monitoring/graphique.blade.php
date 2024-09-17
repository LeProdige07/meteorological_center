@extends('layouts.app')

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 my-2">
                <div class="">
                    <div class="card-header text-center display-6">{{ __('Graphique') }}</div>
                    <br>
                    <hr>
                    <div class="container text-center">
                        <a href="{{ url('/details/' . $site->id) }}" class="btn btn-primary">Retour </a>
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <div class="col-md-9 my-2">

                <canvas id="myChart" style="width:80%;max-width:750px"></canvas>

                <script>
                    var labels = {{ Js::from($labels) }};
                    var temperature_data = {{ Js::from($temperature_data) }};
                    var humidite_data = {{ Js::from($humidite_data) }};
                    var vitesse_vent_data = {{ Js::from($vitesse_vent_data) }};
                    var temperature_ressentie_data = {{ Js::from($temperature_ressentie_data) }};
                    const xValues = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];

                    new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: labels,
                            datasets: [{
                                data: temperature_data,
                                borderColor: "red",
                                label: "Temperature",
                                fill: true
                            }, {
                                data: humidite_data,
                                borderColor: "green",
                                label: "Humidité",
                                fill: true
                            }, {
                                data: vitesse_vent_data,
                                label: "Vitesse du vent",
                                borderColor: "blue",
                                fill: true,
                            }, {
                                data: temperature_ressentie_data,
                                label: "Température ressentie",
                                borderColor: "yellow",
                                fill: true,
                            }]
                        },
                        options: {
                            legend: {
                                display: true
                            }
                        }
                    });
                </script>


            </div>

        </div>
    </div>
@endsection

{{-- <script>
                    const xValues = {{ Js::from($labels) }};
                    var users = {{ Js::from($monitorings) }};

                    new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: users,
                                borderColor: "red",
                                label: "Temperature",
                                fill: true
                            }, {
                                data: [1600, 1700, 1700, 1900, 2000, 2700, 4000, 5000, 6000, 7000],
                                borderColor: "green",
                                label: "Temperature",
                                fill: true
                            }, {
                                data: [300, 700, 2000, 5000, 6000, 4000, 2000, 1000, 200, 100],
                                label: "Temperature",
                                borderColor: "blue",
                                fill: true,
                            }]
                        },
                        options: {
                            legend: {
                                display: true
                            }
                        }
                    });
                </script> --}}
