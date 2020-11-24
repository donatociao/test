@extends('app')

@section('content')

{{-- Aggiungere if a ogni servizio --}}
@if(Route::current()->getName() == 'digital')
  @include('partials.servizi.digital')
  @section('title')Prelibato | Agenzia di Food Marketing in Campania @endsection
  @section('description')Agenzia di food marketing e comunicazione in Campania. Grafica, comunicazione, siti web e digital marketing per aziende food @endsection
  @section('canonical')https://prelibato.eu/ @endsection
@elseif (Route::current()->getName() == 'visual')
  @include('partials.servizi.visual')
@endif

@include('partials.form')

@endsection
