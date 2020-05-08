@extends('app')

@section('content')

{{-- Aggiungere if a ogni servizio --}}
@if(Route::current()->getName() == 'digital')
  @include('partials.servizi.digital')
@elseif (Route::current()->getName() == 'visual')
  @include('partials.servizi.visual')
@endif

@include('partials.form')

@endsection
