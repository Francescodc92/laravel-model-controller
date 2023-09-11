@extends('layouts.app')

@section('page-title', 'movies')

@section('header-title', 'lista movies')



@section('main-content')
<div class="container">
  <div class="row mt-3 row-gap-3">
    @foreach ($movies  as $index => $movie)
      <div class="col-12 col-sm-6 col-md-4 col-lg-3">
        <div class="card h-100">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title text-primary">{{ $movie->title }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary">
              <span class="text-bold text-dark">Titolo originale:</span>
              {{ $movie->original_title }}
            </h6>
            <p class="card-text">
              nazionalità: {{ $movie->nationality }}
            </p>
            <p>uscito il : {{ date("d/m/Y", strtotime($movie->date)) }}</p>
            <p class="fw-bold">voto: {{ $movie->vote }}</p>
              <a href="{{ route('single', ['index'=> $loop->iteration]) }}" class="btn btn-primary">Info</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>
@endsection