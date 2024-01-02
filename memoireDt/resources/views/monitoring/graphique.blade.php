@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 my-2">
                <div class="card">
                    <div class="card-header text-center">{{ __('Graphique') }}</div>
                    <br>
                    <div class="container text-center">
                        <a href="{{ url('/details/' . $site->id) }}" class="btn btn-primary">Retour </a>
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <div>
               
            </div>
        </div>
    </div>
@endsection