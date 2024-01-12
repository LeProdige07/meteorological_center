@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center"><br><br>
            <div class="col-md-10 my-2">
                <div>
                    <div class="card-header display-6">{{ __('Home') }}</div><hr><br>

                    <div class="card-body">
                        <div class="container text-center">
                            <!-- Bouton flottant à droite avec fond bleu -->
                            <a href="{{ url('/formulaire') }}" class="btn btn-primary">Ajouter un site</a>

                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="container ">

                <div>
                    @if (Session::has('status'))
                        <div class="alert alert-success">
                            {{ Session::get('status') }}
                        </div>
                    @endif
                </div>
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
                                    <td><a href="{{ url('/detail/' . $site->id) }}" class="btn btn-primary">Données </a>
                                        <a href="{{ url('/supprimer/' . $site->id) }}" class="btn btn-danger">Supprimer </a>
                                        <a href="{{ url('/edit/' . $site->id) }}" class="btn btn-success">Modifier </a>
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
