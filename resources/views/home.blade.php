@extends('app')

@section('title')Prelibato | Food Marketing e Comunicazione a Eboli Salerno Campania @endsection
@section('description')Agenzia di food marketing e comunicazione in Campania. Grafica, comunicazione, siti web e digital marketing per aziende agroalimentari e ristoranti @endsection
@section('canonical')https://prelibato.eu/ @endsection

@section('content')

  @include('partials.intro')

  <main id="main">
    @include('partials.chisiamo')
    @include('partials.cosafacciamo')
    {{-- @include('partials.lavori') --}}
    @include('partials.portfolio')
    @include('partials.comelavoriamo')
  </main>

  @include('partials.form2')

@endsection
