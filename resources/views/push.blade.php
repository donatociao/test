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
          <h1 id="chisiamo">Prelibato è un'agenzia di marketing e comunicazione <br>a Eboli.</h1>
          <h2>Siamo creativi e fortemente orientati al risultato. <br>Ci piace lavorare fianco a fianco con i clienti per <b>comprendere a fondo desideri, bisogni e obiettivi.</b></h2>
          <h2>Il nostro approccio è basato su ricerca, analisi e creatività per <b>generare soluzioni semplici, potenti e innovative,</b> nate da una combinazione unica di strategia e design.</h2>
          <h1>Alimentiamo il tuo brand.</h1>
          <h2>Ti aiutiamo a partire subito con il piede giusto definendo naming, logo e identità visiva.</h2>
          <h1>Vestiamo i tuoi prodotti.</h1>
          <h2>Progettiamo packaging, etichette, bottiglie, barattoli, scatole, cartoni, shoppers e imballaggi per distinguerti dalla concorrenza.</h2>

        </div>
        <div id="cont-dx" class="col-lg-6 mt-5">
          <h1>Ti mettiamo online.</h1>
          <h2>Progettiamo siti web, e-commerce, landing page, blog aziendali e applicazioni web.</h2>
          <h1>Mettiamo il pepe alla tua comunicazione.</h1>
          <h2>Ci occupiamo di social media marketing, copywriting, email marketing, SEO e advertising, con il giusto mix di strategia e creatività.</h2>
          <h1>Amiamo l'odore della carta.</h1>
          <h2>Progettiamo brochure, pieghevoli, menù per la ristorazione, volantini, locandine, libri, riviste e giornali, manifesti e grandi formati per affissioni.</h2>
          <h1>Diamo valore alle idee.</h1>
          <h2>Progettiamo e realizzaziamo eventi enogastronomici, fieristici, artistici, promozionali e format itineranti.</h2>
        </div>
      </div>
    </div>

  @include('partials.form')
@endsection
