@extends('app')

@section('title')Prelibato | Agenzia di Food Marketing e Comunicazione a Eboli Salerno @endsection
@section('description')Agenzia di marketing e comunicazione a Eboli specializzata in food marketing. Grafica, comunicazione, siti web e digital marketing per food brands, aziende agroalimentari e ristoranti @endsection
@section('canonical')https://prelibato.eu/ @endsection
  
@section('content')
  @include('partials.header')
  @include('partials.intro')

  <main id="main">
    @include('partials.chisiamo')
    @include('partials.cosafacciamo')
    @include('partials.comelavoriamo')
  </main>

  @include('partials.form')

@endsection
