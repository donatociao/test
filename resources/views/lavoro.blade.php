@extends('app')
@section('content')
@include('partials.header')

@if(Route::current()->getName() == 'settefrese')
  @include('partials.lavori.settefrese')
@endif

@include('partials.form')
@endsection
