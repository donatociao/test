@extends('app')

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
