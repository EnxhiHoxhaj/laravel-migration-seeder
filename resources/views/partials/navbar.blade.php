<nav class="nav nav-perso navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid nav-perso">
      <a class="navbar-brand" href="#">Layout base</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-link" href="{{ route('home') }}">Home</a>
            <a class="nav-link" href="{{ route('timetable') }}">Timetable</a>
            <a class="nav-link" href="{{ route('vacation_plan') }}">Piano Vacanze</a>
        </div>
      </div>
    </div>
</nav>
