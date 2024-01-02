@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 class="text-center">
            Modification du site :  <strong>{{$site->name}}</strong>
        </h3>
    </div>
    <br>
    <div class="container">
        <form method="POST" action="{{url('/update_maison/'. $site->id)}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nom du site</label>
                <input type="text" name="name" class="form-control" id="name" value="{{$site->name}}">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="mb-3">
                <label for="ville" class="form-label">Ville</label>
                <input type="text" name="ville" class="form-control" id="ville" value="{{$site->ville}}">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            <div class="input-group mb-3">
                <select class="form-select" id="inputGroupSelect02" name="commune">
                  <option selected>{{$site->commune}}</option>
                  <option value="limete">limete</option>
                  <option value="Kinshasa">Kinshasa</option>
                  <option value="Lingwala">Lingwala</option>
                  <option value="Masina">Masina</option>
                  <option value="Barumbu">Barumbu</option>
                  <option value="Mont-Ngafula">Mont-Ngafula</option>
                  <option value="Ngaliema">Ngaliema</option>
                </select>
                <label class="input-group-text" for="commune">Commune</label>
              </div>
              <div class="mb-3">
                <label for="quartier" class="form-label">Quartier</label>
                <input type="text" name="quartier" class="form-control" id="quartier" value="{{$site->quartier}}">
                {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
            </div>
            {{-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> --}}
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
