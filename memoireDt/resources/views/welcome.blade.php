@extends('layouts.client')

@section('title')
    Welcome
@endsection
@section('content')
    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 my-2">
                <div class="card">
                    <div class="card-header text-center">{{ __('Bienvenue sur notre platforme météorologique !') }}</div>
                    <p class="text-center">
                        Obtenez comme vous voulez, quand vous voulez les données météorologiques de votre region.
                    </p>
                </div>
            </div>
            <br>

            <div class="container ">
                <br>
                <div class="row justify-content-center">

                    <table class="table table-secondary">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Ville</th>
                                <th scope="col">Commune</th>
                                <th scope="col">Quartier</th>
                                <th scope="col">Date</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sites as $key => $site)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $site->name }}</td>
                                    <td>{{ $site->ville }}</td>
                                    <td>{{ $site->commune }}</td>
                                    <td>{{ $site->quartier }}</td>
                                    <td>{{ $site->created_at }}</td>
                                    <td><a href="{{ url('/details/' . $site->id) }}" class="btn btn-primary">Données </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
