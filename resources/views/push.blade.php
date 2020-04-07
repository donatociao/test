@extends('app')

@section('content')
  @include('partials.header')
  <div class="container">
    <h1 id="cosa-facciamo" class="ml1">
      <span class="text-wrapper">
         <span class="letters">contattaci</span>
      </span>
    </h1>
    </div>
    <header class="section-header">
      <h3></h3>
      <p></p>
    </header>

    <div class="container mt-5">
      <div class="row mt-5">
        <div id="cont-sx" class="col-lg-6 mt-5">
          <h1 id="chisiamo"><strong>Prelibato</strong> è un'agenzia di marketing e comunicazione a Eboli.</h1>
          <h2>Siamo creativi e fortemente orientati al risultato. Ci piace lavorare fianco a fianco con i clienti per omprendere a fondo desideri, bisogni e obiettivi.</b></h2>
          <h2>Il nostro approccio è basato su ricerca, analisi e creatività per generare soluzioni semplici, potenti e innovative, nate da una combinazione unica di strategia e design.</h2>
          <h1>Logo e branding.</h1>
          <h2>Alimentiamo il tuo brand e ti aiutiamo a partire subito con il piede giusto definendo naming, logo e identità visiva.</h2>
          <h1>Packaging design.</h1>
          <h2>Vestiamo i tuoi prodotti con etichette, bottiglie, barattoli, scatole, cartoni, shoppers e imballaggi per distinguerti dalla concorrenza.</h2>

        </div>
        <div id="cont-dx" class="col-lg-6 mt-5">
          <h1>Siti web & e-commerce.</h1>
          <h2>Curiamo la progettazione e lo sviluppo di siti web, e-commerce, landing page, blog aziendali e applicazioni web.</h2>
          <h1>Comunicazione e marketing digitale.</h1>
          <h2>Ci occupiamo di social media marketing, copywriting, email marketing, SEO e advertising, con il giusto mix di strategia e creatività.</h2>
          <h1>Progettazione grafica.</h1>
          <h2>Brochure, pieghevoli, menù per la ristorazione, volantini, locandine, libri, riviste e giornali, manifesti e grandi formati per affissioni.</h2>
          <h1>Diamo valore alle idee.</h1>
          <h2>Amiamo gli eventi enogastronomici, eventi fieristici, rassegne artistiche, eventi promozionali e format itineranti.</h2>
        </div>
      </div>
    </div>

  @include('partials.form')
@endsection
