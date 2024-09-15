{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('titlePage')
    Piani vacanza
@endsection

@section('content')
<div class='lista'>
  <h1>Vacanze in treno: ecco le nostre migliori offerte</h1>
  <div class="cont-card d-flex">
      @foreach ($vacation_plan as $plan)
        <div class="card dimention">
          <div class="card-body">
            <h6 class="card-subtitle mb-2 text-body-secondary">Stazione di partenza: {{$plan->departure_station}}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">Stazione di arrivo: {{$plan->arrival_station}}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">Compagnia ferroviaria: {{$plan->company}}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">Prezzo: {{$plan->price}} €</h6>
          </div>
        </div>
      @endforeach

  </div>
</div>

@endsection
