<html lang="it">
    <head>
      @include('partials.head-landing')
    </head>
    <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GZPVWG"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

      @include('partials.header-landing')
      @include('partials.intro-landing')

      <main id="main">
        <!-- Come funziona -->
        <section id="about">
          <div class="container">
            <div class="row d-flex justify-content-center">
              <div class="text-center col-lg-8 col-md-12">
                <h1 id="under-claim">Il metodo Buono per fare innovazione.</h1>
                <h3 class="align-text-center">Analizziamo a fondo la tua azienda ed elaboriamo una strategia di <strong>innovazione e crescita digitale su misura.</strong></h3>
              </div>
            </div>
          </div>
        </section><!-- Come funziona -->

        <!--  Cosa facciamo -->
        <section id="services" class="section-bg">
          <div class="container">
            <h1 id="cosa-facciamo" class="ml1">
              <span class="text-wrapper">
                 <span class="letters">come funziona</span>
              </span>
            </h1>
            <header class="section-header">
              <h3></h3>
              <p></p>
            </header>
          <div class="container mt-5">
            <div class="row st-row">
              <div class="mt-3 offset-lg-1 offset-md-1 offset-sm-1 col-md-10 col-lg-10 wow zoomIn text-center" data-wow-duration="1.4s">
                <h1>Il <b>metodo Buono</b> è il nostro sistema di consulenza per l'innovazione del settore agroalimentare e la <strong>digital transformation per il Made in Italy.</strong></h1>
                {{-- ctA --}}
                  <p class="paragrafo-landing">Vuoi portare l'innovazione nella tua azienda?</p>
                  <!-- Calendly link widget begin -->
                  <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
                  <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
                  <button type="button" class="btn cta-btn"><a title="Scegli subito la data più comoda per te!" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/prelibatosrl/metodo-buono'});return false;">PRENOTA UNA CALL!</a></button>
                  <!-- Calendly link widget end -->
                {{-- ctA --}}
              </div>
              <div class="mt-5 offset-lg-2 offset-md-2 offset-sm-1 col-md-8 col-lg-8 wow zoomIn" data-wow-duration="1.4s">
                <img class="img-fluid" src="{{ asset('img/grow.png') }}" alt="">
              </div>
              <div class="mt-3 offset-lg-1 offset-md-1 col-md-10 col-lg-10 wow zoomIn" data-wow-duration="1.4s">
                <h3>La comprensione profonda della tua azienda è la base da cui partiamo per la progettazione della strategia di <b>crescita del tuo business.</b></h3>
              </div>
              <div class="mt-3 offset-lg-1 offset-md-1 col-md-10 col-lg-10 wow zoomIn" data-wow-duration="1.4s">
                <h3>Analizziamo la tua offerta per identificare il valore che porta ai tuoi clienti e costruiamo il percorso online che lega gli utenti al tuo brand.</h3>
              </div>
            </div>
            {{-- B --}}
            <div class="row st-row">
              <div class="offset-lg-1 offset-md-1 offset-sm-1 col-md-3 col-lg-3 wow zoomIn" data-wow-duration="1.4s">
                <div class="box" id="boxuno">
                  <h1 class="iniziale">B</h1>
                </div>
              </div>
              <div class="col-md-8 col-lg-8">
                <h1 class="font-weight-bold">Brand Analysis</h1>
                <p>Nella prima fase <b>analizziamo a fondo il tuo business.</b> La comprensione profonda della tua azienda è la base da cui partiamo per progettare la strategia. L'analisi del brand è fondamentale per capire come differenziare il tuo prodotto e la tua azienda nella mente del cliente.</p>
                <h4 class="font-weight-bold">1. Analizziamo il contesto</h4>
                <p>Scendiamo in profondità per analizzare il contesto in cui opera la tua azienda identificando cosa è davvero importante per i clienti del tuo mercato.</p>
                <h4 class="font-weight-bold">2. Analizziamo i concorrenti</h4>
                <p>Definiamo quali sono i tuoi principali concorrenti e identifichiamo punti di forza, punti di debolezza, minacce e opportunità.</p>
                <h4 class="font-weight-bold">3. Analizziamo i dati storici</h4>
                <p>Grazie ad un'analisi approfondita dei tuoi dati storici di vendita e customer care realizziamo una mappatura degli aspetti critici del tuo business.</p>
              </div>
            </div>
            {{-- U --}}
            <div class="row st-row">
              <div class="offset-lg-1 offset-md-1 offset-sm-1 col-md-3 col-lg-3 wow zoomIn" data-wow-duration="1.4s">
                <div class="box" id="boxuno">
                  <h1 class="iniziale">U</h1>
                </div>
              </div>
              <div class="col-md-8 col-lg-8">
                <h1 class="font-weight-bold">Unique Selling Proposition</h1>
                <p>In questa fase <b>miglioriamo la tua comunicazione aziendale</b> per rendere evidenti i vantaggi per cui il cliente dovrebbe acquistare il tuo prodotto</b>. Definiamo con chiarezza la promessa di valore giusta per rappresentare l'unicità della tua offerta commerciale.</p>
                <h4 class="font-weight-bold">1. Analizziamo la tua offerta</h4>
                <p>Analizziamo in modo approfondito il tuo prodotto definendo le sue caratteristiche oggettive, i vantaggi e gli svantaggi che apporta ai tuoi clienti.</p>
                <h4 class="font-weight-bold">2. Definiamo accuratamente il target</h4>
                <p>Tenendo conto di quanto abbiamo appreso definiamo accuratamente le buyer personas a cui rivolgere la comunicazione commerciale.</p>
                <h4 class="font-weight-bold">3. Definiamo la promessa di valore</h4>
                <p>Definiamo la promessa di valore che utilizzeremo per convincere i tuoi clienti a scegliere il tuo prodotto a discapito dei tuoi concorrenti.</p>
              </div>
            </div>
            {{-- O --}}
            <div class="row st-row">
              <div class="offset-lg-1 offset-md-1 offset-sm-1 col-md-3 col-lg-3 wow zoomIn" data-wow-duration="1.4s">
                <div class="box" id="boxuno">
                  <h1 class="iniziale">O</h1>
                </div>
              </div>
              <div class="col-md-8 col-lg-8">
                <h1 class="font-weight-bold">Online Presence Analysis</h1>
                <p>In questa fase <b>analizziamo la presenza online della tua azienda</b> in modo molto dettagliato. Il nostro scopo è individuare i migliori punti di contatto con i tuoi potenziali clienti e rendere piacevole il loro percorso verso l'acquisto dei tuoi prodotti.</p>
                <h4 class="font-weight-bold">1. Analizziamo il posizionamento SERP</h4>
                <p>Analizziamo la tua posizione sui motori di ricerca e individuiamo le criticità legate alla geolocalizzazione della tua azienda (Google My Business).</p>
                <h4 class="font-weight-bold">2. Analizziamo il posizionamento SOCIAL</h4>
                <p>In base al target che abbiamo definito individuiamo i canali social da presidiare per raggiungere il pubblico giusto.</p>
                <h4 class="font-weight-bold">3. Definiamo le parole chiave</h4>
                <p>Definiamo le parole chiave per cui vale la pena posizionarsi in modo da permettere ai tuoi clienti di trovarti facilmento online.</p>
              </div>
            </div>
            {{-- N --}}
            <div class="row st-row">
              <div class="offset-lg-1 offset-md-1 offset-sm-1 col-md-3 col-lg-3 wow zoomIn" data-wow-duration="1.4s">
                <div class="box" id="boxuno">
                  <h1 class="iniziale">N</h1>
                </div>
              </div>
              <div class="col-md-8 col-lg-8">
                <h1 class="font-weight-bold">Network Analysis</h1>
                <p>L'obiettivo in questa <b>analizziamo i fattori strategici del tuo business.</b> La creazione di partnership e alleanze strategiche permette di aumentare le possibilità di successo nel mercato con la possibilità di avviare programmi di Open Innovation.</p>
                <h4 class="font-weight-bold">1. Analizziamo i fattori esterni</h4>
                <p>Analizziamo i fattori esterni del ciclo produttivo e le caratteristiche dei tuoi fornitori chiave per identificare le opportunità di miglioramento del tuo prodotto.</p>

                <h4 class="font-weight-bold">3. Identifichiamo i partner strategici</h4>
                <p>Identifichiamo i partner scientifici, tecnologici e commerciali con cui sviluppare alleanze strategiche solide e durature per la crescita della tua azienda. </p>
              </div>
            </div>
            {{-- O --}}
            <div class="row st-row">
              <div class="offset-lg-1 offset-md-1 offset-sm-1 col-md-3 col-lg-3 wow zoomIn" data-wow-duration="1.4s">
                <div class="box" id="boxuno">
                  <h1 class="iniziale">O</h1>
                </div>
              </div>
              <div class="col-md-8 col-lg-8">
                <h1 class="font-weight-bold">Obiettivi e Pianificazione strategica</h1>
                <p>In questa fase <b>definiamo la strategia operativa</b> per far crescere la tua azienda. Ti forniamo un'indicazione chiara e trasparente rispetto a tutto quello che faremo per passare all'azione.</p>
                <h4 class="font-weight-bold">1. Fissiamo gli obiettivi da raggiungere</h4>
                <p>Definiamo gli obiettivi e identifichiamo tutte le operazioni necessarie per raggiungerli (esempio: restyling del marchio, realizzazione sito web, realizzazione ecommerce, progettazione del packaging, lancio campagne promozionali online etc.)</p>
                <h4 class="font-weight-bold">2. Definiamo accuratamente gli Indicatori di Performance</h4>
                <p>Identifichiamo gli indicatori di performance e i dati da monitorare per valutare l'efficacia della nostra azione e il raggiungimento degli obiettivi fissati.</p>
                <h4 class="font-weight-bold">3. Realizziamo un Piano Operativo</h4>
                <p>Ti forniamo un piano d'azione chiaro ed esaustivo con la tempistica e le modalità di esecuzione di tutto quello che faremo per far crescere la tua azienda.</p>
              </div>
            </div>
          </div>
        </div>
      </section><!-- fine Cosa facciamo -->
      <!--  Cosa facciamo -->
      <section id="services" class="section-bg">
        <div class="container">
          <h1 id="cosa-facciamo" class="ml1">
            <span class="text-wrapper">
               <span class="letters">cosa miglioriamo</span>
            </span>
          </h1>
          <header class="section-header">
            <h3></h3>
            <p></p>
          </header>
          <div class="row st-row">
            <div class="mt-3 offset-lg-1 offset-md-1 offset-sm-1 col-md-10 col-lg-10 wow zoomIn text-center" data-wow-duration="1.4s">
              <h1>Il <b>metodo Buono</b> è la soluzione perfetta per <strong>migliorare i risultati delle aziende agroalimentari </strong> rendendole più efficienti e performanti, connesse e pronte a competere nel mercato digitale. </h1>
            </div>
            <div class="mt-3 offset-lg-1 offset-md-1 offset-sm-1 col-md-10 col-lg-10 wow zoomIn text-center" data-wow-duration="1.4s">
            {{-- ctA --}}
              <p class="paragrafo-landing">Vuoi ricevere informazioni per far crescere la tua azienda?</p>
              <!-- Calendly link widget begin -->
              <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
              <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
              <button type="button" class="btn cta-btn"><a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/prelibatosrl/metodo-buono'});return false;">PRENOTA UNA CALL!</a></button>
              <!-- Calendly link widget end -->
            {{-- ctA --}}
            </div>
            <div class="mt-3 offset-lg-2 offset-md-2 offset-sm-1 col-md-8 col-lg-8 wow zoomIn" data-wow-duration="1.4s">
              <img class="img-fluid" src="{{ asset('img/grow.png') }}" alt="">
            </div>
            <div class="mt-3 offset-lg-1 offset-md-1 col-md-10 col-lg-10 wow zoomIn" data-wow-duration="1.4s">
              <h3>La comprensione profonda della tua azienda è la base da cui partiamo per la progettazione della strategia di <b>crescita del tuo business.</b></h3>
            </div>
            <div class="mt-3 offset-lg-1 offset-md-1 col-md-10 col-lg-10 wow zoomIn" data-wow-duration="1.4s">
              <h3>Analizziamo la tua offerta per identificare il valore che porta ai tuoi clienti e costruiamo il percorso online che lega gli utenti al tuo brand.</h3>
            </div>
          </div>

          <div class="row st-row">
            <div class="offset-lg-1 offset-md-1 offset-sm-1 col-md-5 col-lg-5 wow zoomIn" data-wow-duration="1.4s">
              <div class="box" id="boxuno">
                <h1 class="title"></h1>
                <ul>
                  <li>Logo & Branding</li>
                  <li>UI / UX Design</li>
                  <li>Packaging</li>
                  <li>Editoria</li>
                  <li>Foto & Video</li>
                  <li>Stand & Interior Design</li>
                </ul>
              </div>
            </div>
            <div class="offset-lg-1 offset-md-1 offset-sm-1  col-md-5 col-lg-5 wow zoomIn" data-wow-duration="1.4s">
              <div class="box">
                <h1 class="title">WEB</h1>
                <ul>
                  <li>Siti Web Responsive</li>
                  <li>Sviluppo Front / Back-end</li>
                  <li>Applicazioni Web</li>
                  <li>e-Commerce</li>
                  <li>Landing Pages</li>
                  <li>CMS</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="offset-lg-1 offset-md-1 offset-sm-1 col-md-5 col-lg-5 wow zoomIn" data-wow-duration="1.4s">
              <div class="box">
                <h1 class="title">DIGITAL</h1>
                <ul>
                  <li>Strategy & Advertising</li>
                  <li>Copywriting</li>
                  <li>Social Media Marketing</li>
                  <li>Email Marketing</li>
                  <li>SEO & SEM</li>
                </ul>
              </div>
            </div>
            <div class="offset-lg-1 offset-md-1 offset-sm-1  col-md-5 col-lg-5 wow zoomIn" data-wow-duration="1.4s">
              <div class="box">
                <h1 class="title">EVENTI</h1>
                <ul>
                  <li>Progettazione</li>
                  <li>Planning & Logistica</li>
                  <li>Promozione online / offline</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section><!-- fine Cosa facciamo -->


        @include('partials.comelavoriamo')
      </main>

      @include('partials.form')

      @include('partials.scripts')
    </body>
</html>
