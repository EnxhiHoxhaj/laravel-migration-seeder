{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')

@section('hero')

@endsection

@section('content')
<div class="container my-5">
    <h1>Titolo</h1>
    <p>
        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sed aperiam commodi harum labore a aliquam, quisquam molestiae aspernatur vitae excepturi? Quasi facere doloribus ullam quas. Necessitatibus quam reiciendis inventore aliquid.
    </p>
</div>

@endsection


@section('titlePage')
    home
@endsection
