@extends('layouts.app')

@section('page-title', $movie->title )
 

@section('header-title', 'dettagli'.' '.$movie->title)

@section('main-content')
<div class="container">
  <div class="row mt-3 row-gap-3">
      <div class="col-12">
        <div class="card h-100">
          <div class="card-body d-flex flex-column justify-content-between">
            <h5 class="card-title text-primary text-center">{{ $movie->title }}</h5>
            <h6 class="card-subtitle mb-2 text-body-secondary text-capitalize">titolo originale: {{ $movie->original_title }}</h6>
            <p class="card-text">
              <span class="fw-bold">
                nazionalità:  
              </span> 
              {{ $movie->nationality }}
            </p>
            <p>
              <span class="fw-bold text-capitalize">
                uscito il : 
              </span> 
              {{ date("d/m/Y", strtotime($movie->date)) }}
            </p>
            <p class="fw-bold">Voto: {{ $movie->vote }}</p>
            <p>
              <span class="fw-bold text-capitalize">
                descrizione:
              </span>
               Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex fugiat, possimus rerum exercitationem ipsum placeat voluptatum debitis quia. Quis, facilis labore et minus, aliquid soluta asperiores in quia obcaecati iusto magni consectetur voluptates provident. Laboriosam fugit repellat dolor quidem fuga repellendus qui ipsum eaque debitis eligendi voluptatem beatae, necessitatibus dolore?

            </p>
            <a href="{{ route('home') }}" class="btn btn-success fw-bold text-uppercase">
              <i class="fa-solid fa-arrow-left me-3"></i>
              torna alla home
            </a>
          </div>
        </div>
      </div>
  </div>
</div>
@endsection