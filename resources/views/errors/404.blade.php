@extends('app')

@section('content')
  @include('partials.header')
    <div class="container mt-5">
      <div class="row mt-5">
        <div id="cont-sx" class="col-lg-12 mt-5">
          <h1>Ops, ti sei perso!</h1>
          <h2>Questa pagina non esiste. Torna alla <a title="Torna alla Home" href="{{route('home')}}">home.</></h2>
      </div>
    </div>
  </div>

  @include('partials.form')
@endsection
