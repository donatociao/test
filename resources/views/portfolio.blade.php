@extends('app')

@section('content')
@include('partials.header')

  <div class="container mt-5 h-50">
    <div class="row">
      <div class="col-lg-12" id="cont-sx">
        <h1>Ci stiamo lavorando.</h1>
        <h2>Questa sezione non è ancora disponibile.</h2>
      </div>
    </div>
  </div>

  {{-- @include('partials.lavori') --}}
  <div id="social-bar" class="social-bar d-flex flex-column">
    <a target="_blank" title="Seguici su Facebook!" rel="noopener noreferrer" href="http://www.facebook.com/prelibato1" class="facebook"><i class="fa fa-facebook"></i></a>
    <a target="_blank" title="Seguici su Instagram!" rel="noopener noreferrer" href="https://www.instagram.com/_prelibato_/" class="instagram"><i class="fa fa-instagram"></i></a>
    <a target="_blank" title="Seguici su LinkedIn!" rel="noopener noreferrer" href="https://www.linkedin.com/company/prelibatosrl " class="linkedin"><i class="fa fa-linkedin"></i></a>
    <a target="_blank" title="Hai bisogno di aiuto? Scrivici una mail!" rel="noopener noreferrer" href="mailto:info@prelibato.eu" class="linkedin"><i class="fa fa-envelope-o"></i></a>
  </div>
  @include('partials.form')
@endsection
