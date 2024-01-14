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
                    const xValues = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
            
                    new Chart("myChart", {
                        type: "line",
                        data: {
                            labels: xValues,
                            datasets: [{
                                data: [15, 20, 30, 20, 10, 60, 25, 38, 45, 21],
                                borderColor: "red",
                                label: "Temperature",
                                fill: true
                            }, {
                                data: [36, 17, 17, 19, 20, 27, 40, 50, 60, 50],
                                borderColor: "green",
                                label: "Humidité",
                                fill: true
                            }, {
                                data: [30, 70, 20, 50, 60, 40, 20, 10, 20, 10],
                                label: "Vitesse du vent",
                                borderColor: "blue",
                                fill: true,
                            }, {
                                data: [30, 50, 20, 30, 65, 20, 20, 15, 25, 35],
                                label: "Telpérature ressentie",
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