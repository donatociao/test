@extends('app')

@section('content')
@include('partials.header')

@if(Route::current()->getName() == 'digital')
  @include('partials.servizi.digital')
@elseif (Route::current()->getName() == 'visual')
  @include('partials.servizi.visual')
@endif



@include('partials.form')
@endsection
