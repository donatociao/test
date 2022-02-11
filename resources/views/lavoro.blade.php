@extends('app')
@section('content')

{{-- Aggiungere if a ogni lavoro --}}
@if(Route::current()->getName() == 'settefrese')
  @include('partials.lavori.settefrese')
@endif

{{-- Aggiungere if a ogni lavoro --}}
@if(Route::current()->getName() == 'percorsi')
  @include('partials.lavori.percorsi')
@endif

{{-- Aggiungere if a ogni lavoro --}}
@if(Route::current()->getName() == 'cucu')
  @include('partials.lavori.cucu')
@endif

@include('partials.form')

@endsection
