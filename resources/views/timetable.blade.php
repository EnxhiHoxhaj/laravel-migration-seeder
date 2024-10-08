{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('titlePage')
    Tabella orari
@endsection

@section('content')
<div class='lista'>
  <h1>Orario treni</h1>
  <div class="cont-card d-flex">
    @foreach ($trains as $train)
      <div class="card dimention">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 text-body-secondary">Stazione di partenza: {{$train->departure_station}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">Stazione di arrivo: {{$train->arrival_station}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">Orario di partenza: {{$train->departure_time}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">Binari: {{$train->platform}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">Orario di arrivo: {{$train->arrival_time}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">Compagnia ferroviaria: {{$train->company}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">Treno numero: {{$train->train_code}}</h6>
          <h6 class="card-subtitle mb-2 text-body-secondary">Numero di vagoni: {{$train->number_of_carriages}}</h6>
          @if ($train->on_time = 1 )
          <h6 class="card-subtitle mb-2 text-body-secondary">Ritardo: Treno in orario</h6>
          @else
          <h6 class="card-subtitle mb-2 text-body-secondary">Ritardo: Treno in Ritardo</h6>
          @endif
          @if ($train->cancelled = 0 )
          <h6 class="card-subtitle mb-2 text-body-secondary">Cancellato</h6>
          @else
          @endif
        </div>
      </div>
    @endforeach
  </div>
</div>

@endsection
