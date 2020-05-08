@extends('app')
@section('content')

{{-- Aggiungere if a ogni lavoro --}}
@if(Route::current()->getName() == 'settefrese')
  @include('partials.lavori.settefrese')
@endif

@include('partials.form')

@endsection
