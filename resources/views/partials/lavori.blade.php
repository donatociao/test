<!--  Portfolio -->
<section id="services" class="section-bg mb-5">
  <div class="container">
    <h3 id="cosa-facciamo" class="ml1">
      <span class="text-wrapper">
         <span class="letters">portfolio</span>
      </span>
    </h3>
    <header class="section-header">
      <h3></h3>
      <p></p>
    </header>

    {{-- RIGA TEMPLATE --}}
    <div class="row st-row">
      <div class="col-md-5 col-lg-5 wow fadeInUp" data-wow-duration="1.5s">
        <a title="Clicca e apri il progetto" href="{{route('giannattasio')}}">
          <div class="box" id="boxuno">
            <h1 class="title">GIANNATTASIO</h1>
            <span>branding | packaging design | web</span>
          </div>
        </a>
        <p>Tradizione & Innovazione: un nuova identità visiva per Giannattasio Nocciole, azienda specializzata nella lavorazione e trasformazione della pregiata Nocciola “Tonda” di Giffoni.</p>
        <a title="Clicca e apri il progetto" href="{{route('giannattasio')}}"><img class="img-fluid" data-wow-duration="1.5s" src="{{asset('img/portfolio/giannattasio/copertina.gif')}}" alt="Giannattasio Progetto"></a>
      </div>
      <div class="offset-lg-2 offset-md-2 offset-sm-2 col-md-5 col-lg-5 wow fadeInUp" data-wow-duration="1.5s">
        <a title="Clicca e apri il progetto" href="{{route('cucu')}}">
          <div class="box" id="boxuno">
            <h1 class="title">CUCÙ</h1>
            <span>branding | advertising | digital strategy</span>
          </div>
        </a>
        <p>Due giovani imprenditori che hanno voluto fare del proprio locale un porto sicuro per gli amanti del gusto, con un'offerta che va dalla colazione, all’aperitivo, alla gastronomia take away.</p>
        <a title="Clicca e apri il progetto" href="{{route('cucu')}}"><img class="img-fluid" data-wow-duration="1.5s" src="{{asset('img/portfolio/cucu/copertina.gif')}}" alt="Cucù Progetto"></a>
      </div>
      <div class="col-md-5 col-lg-5 mt-5 wow fadeInUp" data-wow-duration="1.5s">
        <a title="Clicca e apri il progetto" href="{{route('settefrese')}}">
          <div class="box" id="boxuno">
            <h1 class="title">SETTEFRESE</h1>
            <span>branding | packaging design </span>
          </div>
        </a>
        <p>Una storia d'amore per la propria terra, in contrada Settefrese. Maichol è un giovane e ambizioso agricoltore e ci ha chiesto di progettare un nuovo brand per la sua azienda.</p>
        <a title="Clicca e apri il progetto" href="{{route('settefrese')}}"><img class="img-fluid" data-wow-duration="1.5s" src="{{asset('img/portfolio/settefrese/6.jpg')}}" alt="settefrese-bottiglia"></a>
      </div>
      <div class="offset-lg-2 offset-md-2 offset-sm-2 mt-5 col-md-5 col-lg-5 wow fadeInUp" data-wow-duration="1.5s">
        <a title="Clicca e apri il progetto" href="{{route('percorsi')}}">
          <div class="box" id="boxuno">
            <h1 class="title">PERCORSI</h1>
            <span>visual design | comunicazione | web </span>
          </div>
        </a>
        <p>Un centro storico, 40 aziende agroalimentari, 8 sponsor e 4 patrocini di eccellenza: Percorsi è una rassegna itinerante alla scoperta del cibo, nel cuore del centro antico di Eboli.</p>
        <a title="Clicca e apri il progetto" href="{{route('percorsi')}}"><img class="img-fluid" data-wow-duration="1.5s" src="{{asset('img/portfolio/percorsi/2.gif')}}" alt="percorsi-visual"></a>
      </div>
    </div>
    {{-- FINE RIGA TEMPLATE --}}

  </div>
</section><!-- fine portfolio -->
