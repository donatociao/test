  <html lang="it">
      <head>
        @include('partials.head-landing')
        <script src="https://kit.fontawesome.com/1b1dda8dd0.js" crossorigin="anonymous"></script>
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
            <div id="about" class="container-fluid">
              <div class="row d-flex justify-content-center">
                <div class="text-center col-lg-10 col-md-12">
                  <h2 id="under-claim">Tu produci, noi pensiamo alla tua crescita.</h1>
                  <h3 id="under-claim2" class="align-text-center">Siamo una società specializzata in <b>food marketing</b>. <br>Lavoriamo con aziende del settore food & beverage. <br><br>Il nostro unico obiettivo è la <strong>crescita della tua azienda.</strong></h3>
                </div>
              </div>
            </div><!-- Come funziona -->

          <!--  Cosa facciamo -->
          <section id="services" class="section-bg">
              <div class="container mt-5">
                <div class="row st-row">
                  <div class="mt-3 offset-lg-1 offset-md-1 offset-sm-1 col-md-10 col-lg-10 wow zoomIn text-center" data-wow-duration="1.4s">
                    <h1>Il <b>metodo Buono&trade;</b> è il nostro sistema di consulenza dedicato alla <b>crescita digitale delle aziende food & beverage.</b></h1>
                  </div>
                {{-- <div class="mt-5 offset-lg-2 offset-md-2 offset-sm-1 col-md-8 col-lg-8">
                  <img class="img-fluid" src="{{ asset('img/grow.png') }}" alt="freccia" >
                </div> --}}
                </div>
              <div class="row st-row">
                <div class="col-md-6 col-lg-6">
                  <h2><b>Non continuare</b> a leggere se:</h2>
                  <h5><i class="far fa-times-circle text-danger"></i> Credi di poter far sempre tutto da solo</h5>
                  <h5><i class="far fa-times-circle text-danger"></i> Non vuoi migliorare la tua immagine aziendale</h5>
                  <h5><i class="far fa-times-circle text-danger"></i> Credi che sia inutile avere una strategia</h5>
                  <h5><i class="far fa-times-circle text-danger"></i> Non vuoi affidarti ad un team di esperti</h5>
                </div>
                <div class="col-md-6 col-lg-6">
                  <h2><b>Continua</b> a leggere se:</h2>
                  <h5><i class="far fa-check-circle text-success"></i> Vuoi migliorare la tua comunicazione</h5>
                  <h5><i class="far fa-check-circle text-success"></i> Hai bisogno di far crescere il tuo brand</h5>
                  <h5><i class="far fa-check-circle text-success"></i> Stai pensando di iniziare a vendere online</h5>
                  <h5><i class="far fa-check-circle text-success"></i> Hai un budget da investire in marketing</h5>
                </div>
                <div class="col-lg-12 text-center mt-4">
                  {{-- ctA --}}
                    <p class="paragrafo-landing font-weight-bolder">Vuoi ricevere subito altre informazioni?</p>
                    <p>Prenota una <b>prima consulenza gratuita in videoconferenza.</b> </p>
                    <p>Un nostro esperto sarà a tua disposizione per fornirti tutte le informazioni di cui hai bisogno senza alcun impegno da parte tua</p>
                    <!-- Calendly link widget begin -->
                    <button type="button" class="btn cta-btn"><a title="Scegli subito la data più comoda per te!" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/prelibatosrl/metodo-buono'});return false;">PRENOTA UNA CONSULENZA GRATUITA</a></button>
                    <!-- Calendly link widget end -->
                  {{-- ctA --}}
                </div>
              </div>
            </div>

            <div class="container">
              <div class="row st-row">
                <h4 id="cosa-facciamo" class="ml1">
                  <span class="text-wrapper">
                     <span class="letters">come funziona</span>
                  </span>
                </h4>
                <header class="section-header">
                  <h3></h3>
                  <p></p>
                </header>
              </div>
              <div class="row st-row text-center">
                <div class="mt-2 offset-lg-1 offset-md-1 offset-sm-1 col-md-10 col-lg-10 wow zoomIn" data-wow-duration="1.4s">
                  <h1><b>Rendiamo la tua azienda più efficiente</b>, performante, connessa e pronta a competere.</h1>
                  <h2>Miglioriamo la tua comunicazione online e <b>costruiamo relazioni positive tra gli utenti e il tuo brand.</b></h2>
                </div>
              </div>
              <div class="container">
                <div class="row mt-5">
                  <div class="offset-lg-2 offset-md-2 offset-sm-1 col-lg-8">
                    <p>Il <b>Metodo Buono&trade;</b> è il sistema di consulenza su misura per le aziende del mondo food & beverage.</p>
                    <p>Il tuo settore è sempre più competitivo e non puoi permetterti di improvvisare. <b>Cosa stai facendo per competere online?</b></p>
                    <p>Siamo un team di consulenti <b>esperti in food marketing e comunicazione</b> per il settore food & beverage.</p>
                    <h3><b>Perchè scegliere noi?</b></h3>
                    <p>1. Ti guidiamo nell'analisi approfondita del tuo business</p>
                    <p>2. Ti seguiamo nella fase di pianificazione strategica</p>
                    <p>3. Tu produci e noi gestiamo la tua presenza online</p>
                  </div>
                </div>

                  <div class="row">
                    <div class="mt-3 offset-lg-1 offset-md-1 offset-sm-1 col-md-10 col-lg-10 wow zoomIn text-center" data-wow-duration="1.4s">
                      <h2>Abbiamo un unico obiettivo! <b><br>La crescita della tua azienda.</b> <br><br> Prenota subito la tua <strong>prima consulenza gratuita</strong></h2>
                    {{-- ctA --}}
                      <!-- Calendly link widget begin -->
                      <button type="button" class="btn cta-btn"><a title="Scegli subito la data più comoda per te!" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/prelibatosrl/metodo-buono'});return false;">PRENOTA UNA CONSULENZA GRATUITA</a></button>
                      <!-- Calendly link widget end -->
                    {{-- ctA --}}
                    </div>
                  </div>

                <div id="workflow" class="row st-row">
                  <div class="offset-lg-1 offset-md-1 offset-sm-1 col-lg-2 col-md-2 col-sm-2 uno wow zoomIn">
                    <div class="box" id="boxuno">
                      <h4 class="iniziale">B</h4>
                    </div>
                    <h4><b>B</b>usiness</h4>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 uno wow zoomIn">
                    <div class="box" id="boxuno">
                      <h4 class="iniziale">U</h4>
                    </div>
                    <h4><b>U</b>nicità</h4>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 uno wow zoomIn">
                    <div class="box" id="boxuno">
                      <h4 class="iniziale">O</h4>
                    </div>
                    <h4><b>O</b>nline</h4>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 uno wow zoomIn">
                    <div class="box" id="boxuno">
                      <h4 class="iniziale">N</h4>
                    </div>
                    <h4><b>N</b>etwork</h4>
                  </div>
                  <div class="col-lg-2 col-md-2 col-sm-2 uno wow zoomIn">
                    <div class="box" id="boxuno">
                      <h4 class="iniziale">O</h4>
                    </div>
                    <h4><b>O</b>biettivi</h4>
                  </div>
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
                  <h1 class="font-weight-bold">Brand & Business</h1>
                  <p>Nella prima fase <b>analizziamo a fondo il tuo business.</b> La comprensione profonda della tua azienda è la base da cui partiamo per progettare la strategia. L'obiettivo è differenziare il tuo prodotto e la tua azienda nella mente del cliente.</p>
                  <h4 class="font-weight-bold">1. Analizziamo il contesto</h4>
                  <p>Scendiamo in profondità analizzando il contesto per capire cosa è davvero importante per i clienti del tuo mercato.</p>
                  <h4 class="font-weight-bold">2. Analizziamo i concorrenti</h4>
                  <p>Definiamo quali sono i tuoi principali concorrenti e identifichiamo punti di forza, punti di debolezza, minacce e opportunità.</p>
                  <h4 class="font-weight-bold">3. Analizziamo i dati storici</h4>
                  <p>Analizziamo approfonditamente i tuoi dati storici di vendita e customer care per scovare gli aspetti critici del tuo business.</p>
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
                  <p>In questa fase <b>miglioriamo la tua comunicazione aziendale</b> per rappresentare l'unicità della tua offerta commerciale. Rendiamo evidenti i vantaggi per cui il cliente dovrebbe acquistare il tuo prodotto a discapito dei tuoi concorrenti.</p>
                  <h4 class="font-weight-bold">1. Analizziamo la tua offerta</h4>
                  <p>Analizziamo il tuo prodotto e definiamo le sue caratteristiche oggettive, i vantaggi e gli svantaggi che apporta ai tuoi clienti.</p>
                  <h4 class="font-weight-bold">2. Definiamo accuratamente il target</h4>
                  <p>Definiamo accuratamente gli stereotipi di persone a cui rivolgere la comunicazione commerciale per essere efficaci.</p>
                  <h4 class="font-weight-bold">3. Comunichiamo il tuo valore</h4>
                  <p>Definiamo la promessa di valore per convincere i tuoi clienti a scegliere il tuo prodotto a discapito dei tuoi concorrenti.</p>
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
                  <p>Analizziamo la tua posizione sui motori di ricerca e individuiamo le criticità legate alla geolocalizzazione della tua azienda.</p>
                  <h4 class="font-weight-bold">2. Analizziamo il posizionamento SOCIAL</h4>
                  <p>In base al target che abbiamo definito individuiamo i canali social da presidiare per raggiungere il pubblico giusto.</p>
                  <h4 class="font-weight-bold">3. Definiamo le parole chiave</h4>
                  <p>Definiamo le parole chiave per cui posizionarsi in modo da permettere ai tuoi clienti di trovarti facilmento online.</p>
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
                  <p>In questa <b>analizziamo i fattori strategici del tuo business.</b> La creazione di partnership e alleanze strategiche permette di aumentare le possibilità di successo nel mercato.</p>
                  <h4 class="font-weight-bold">1. Analizziamo i fattori esterni</h4>
                  <p>Analizziamo i fattori esterni del ciclo produttivo e le caratteristiche dei tuoi fornitori chiave per identificare le opportunità di miglioramento del tuo prodotto.</p>
                  <h4 class="font-weight-bold">2. Identifichiamo i partner strategici</h4>
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
                  <h1 class="font-weight-bold">Obiettivi & Strategia</h1>
                  <p>In questa fase <b>definiamo la strategia operativa</b> per far crescere la tua azienda. Ti forniamo un'indicazione chiara e trasparente di tutto quello che faremo per la crescita della tua azienda.</p>
                  <h4 class="font-weight-bold">1. Fissiamo gli obiettivi da raggiungere</h4>
                  <p>Definiamo gli obiettivi e identifichiamo tutte le operazioni necessarie per raggiungerli (esempio: restyling del marchio, realizzazione sito web, realizzazione ecommerce, progettazione del packaging, lancio campagne promozionali online etc.)</p>
                  <h4 class="font-weight-bold">2. Definiamo gli Indicatori di Performance</h4>
                  <p>Identifichiamo gli indicatori di performance e i dati da monitorare per valutare l'efficacia della nostra azione e il raggiungimento degli obiettivi fissati.</p>
                  <h4 class="font-weight-bold">3. Realizziamo un Piano Operativo</h4>
                  <p>Ti forniamo un piano d'azione chiaro ed esaustivo con la tempistica e le modalità di esecuzione di tutto quello che faremo per far crescere la tua azienda.</p>
                </div>
              </div>
            </div>
        </section><!-- fine Cosa facciamo -->

        <!--  Cosa facciamo -->
        <section id="services" class="section-bg">
          <div class="container">
            <h1 id="cosa-facciamo" class="ml1">
              <span class="text-wrapper">
                 <span class="letters">il metodo</span>
              </span>
            </h1>
            <header class="section-header">
              <h3></h3>
              <p></p>
            </header>
            <div class="row st-row">
              <div class="mt-3 offset-lg-1 offset-md-1 offset-sm-1 col-md-10 col-lg-10 wow zoomIn text-center" data-wow-duration="1.4s">
                <h1>Il <b>Metodo Buono&trade;</b> è la soluzione su misura per la <strong>crescita</strong> della tua azienda.</h1>
                <h3>Il nostro team di<b> esperti in food marketing e strategia digitale</b> ti seguirà passo dopo passo!</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 wow zoomIn" data-wow-duration="1.4s">
                <div class="box" id="boxuno">
                  <div class="media">
                    <img src="{{asset('/img/favicon/apple-icon-76x76.png')}}" class="mr-3" alt="...">
                    <div class="media-body">
                      <h3 class="mt-0"><b>Tu produci, noi pensiamo alla tua crescita!</b></h3>
                      <p>Un team di esperti digitali a tua disposizione per la crescita della tua azienda: digital marketing, food marketing, strategia digitale, analisi dei dati, graphic design e web design.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 wow zoomIn" data-wow-duration="1.4s">
                <div class="box">
                  <div class="media">
                    <img src="{{asset('/img/favicon/apple-icon-76x76.png')}}" class="mr-3" alt="...">
                    <div class="media-body">
                      <h3 class="mt-0"><b>Il tuo Digital Manager dedicato</b></h3>
                      <p>Stai cercando un Digital Manager per la tua azienda? Ti seguiamo passo passo e analizziamo a fondo il tuo business per definire una strategia di crescita digitale su misura per la tua azienda. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 col-lg-6 wow zoomIn" data-wow-duration="1.4s">
                <div class="box">
                  <div class="media">
                    <img src="{{asset('/img/favicon/apple-icon-76x76.png')}}" class="mr-3" alt="...">
                    <div class="media-body">
                      <h3 class="mt-0"><b>Un obiettivo alla volta</b></h3>
                      <p>Avrai sempre tutto sotto controllo grazie al nostro piano strategico chiaro ed esaustivo. Definiamo insieme i tempi e le modalità di azione per raggiungere i tuoi obiettivi.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-6 wow zoomIn" data-wow-duration="1.4s">
                <div class="box">
                  <div class="media">
                    <img src="{{asset('/img/favicon/apple-icon-76x76.png')}}" class="mr-3" alt="...">
                    <div class="media-body">
                      <h3 class="mt-0"><b>Il turbo alle tue vendite online</b></h3>
                      <p>Vuoi iniziare a vendere online? Vuoi migliorare le tue performance? Rendiamo i tuoi prodotti irresistibili per i clienti e mettiamo il turbo alle tue vendite.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><!-- fine Cosa facciamo -->

        <div class="mt-3 offset-lg-1 offset-md-1 offset-sm-1 col-md-10 col-lg-10 text-center">
          <h2>Con il <b>Metodo Buono&trade;</b> finalmente potrai:</h2>
          <div class="text-center">
            <h5><i class="far fa-check-circle text-success"></i> migliorare e ottimizzare la tua comunicazione </h5>
            <h5><i class="far fa-check-circle text-success"></i> definire un chiaro posizionamento per la tua azienda</h5>
            <h5><i class="far fa-check-circle text-success"></i> migliorare la tua immagine e quella dei tuoi prodotti</h5>
            <h5><i class="far fa-check-circle text-success"></i> migliorare il tuo processo di vendita online e offline</h5>
            <h5><i class="far fa-check-circle text-success"></i> definire una strategia per trovare subito nuovi clienti</h5>
            <h5><i class="far fa-check-circle text-success"></i> ottimizzare la tua presenza online</h5>
          </div>
        </div>

        <div class="mt-3 offset-lg-1 offset-md-1 offset-sm-1 col-md-10 col-lg-10 wow zoomIn text-center" data-wow-duration="1.4s">
        {{-- ctA --}}
          <p class="paragrafo-landing"><b>Inizia subito a far crescere la tua azienda!</b></p>
          <!-- Calendly link widget begin -->
          <button type="button" class="btn cta-btn"><a href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/prelibatosrl/metodo-buono'});return false;">PRENOTA UNA CONSULENZA GRATUITA</a></button>
          <!-- Calendly link widget end -->
        {{-- ctA --}}
        </div>
        <h3 id="metodo" class="ml2 mt-3">
          <span class="text-wrapper d-flex justify-content-end">
             <span class="letters">hai dubbi?</span>
          </span>
        </h3>
        <div class="mt-5 offset-lg-1 offset-md-1 offset-sm-1 col-md-10 col-lg-10 wow zoomIn">
          <div class="card">
            <div class="card-header">
              A chi si rivolge il <b>metodo Buono&trade;?</b>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Il <b>metodo Buono&trade;</b> è il nostro sistema di consulenza dedicato alla crescita digitale delle aziende che operano nel <b>settore food & beverage e agroalimentare.</b></p>
              </blockquote>
            </div>
          </div>
          <div class="card mt-5">
            <div class="card-header">
              Come funziona il <b>metodo Buono&trade;?</b>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p>Il <b>metodo Buono&trade;</b> consiste in una fase analitica e una fase operativa. Durante la fase analitica il nostro team di consulenti <b>esperti in food marketing e comunicazione</b> ti affiancherà nella comprensione profonda della tua azienda e del tuo business. La fase operativa consiste nella definizione della strategia di crescita e nella progettazione di tutto quello di cui hai bisogno per dare valore al tuo progetto </p>
              </blockquote>
            </div>
          </div>
          <div class="card mt-5">
            <div class="card-header">
              Di cosa vi occupate nello specifico?</b>
            </div>
            <div class="card-body">
              <blockquote class="blockquote mb-0">
                <p><b>Prelibato è una società specializzata in food marketing e comunicazione.</b> Lavoriamo con le aziende del settore food & beverage e il nostro team di <b>esperti in food marketing e comunicazione</b> è pronto a seguirti passo passo nella crescita della tua azienda. Ci occupiamo di marketing strategico, branding & logo design, web design e sviluppo siti web, ecommerce, digital marketing, social media marketing e gestione di campagne pubblicitarie.</p>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="offset-lg-2 offset-md-2 offset-sm-2 col-md-8 col-lg-8 text-center mt-5 mb-5">
          {{-- ctA --}}
            <p class="paragrafo-landing font-weight-bolder">Vuoi ricevere subito altre informazioni?</p>
            <p>Prenota una <b>prima consulenza gratuita in videoconferenza.</b> </p>
            <p>Un nostro esperto sarà a tua disposizione per fornirti tutte le informazioni di cui hai bisogno senza alcun impegno da parte tua</p>
            <!-- Calendly link widget begin -->
            <button type="button" class="btn cta-btn"><a title="Scegli subito la data più comoda per te!" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/prelibatosrl/metodo-buono'});return false;">PRENOTA UNA CONSULENZA GRATUITA</a></button>
            <!-- Calendly link widget end -->
          {{-- ctA --}}
        </div>


        </main>

        @include('partials.form-landing')

        @include('partials.scripts')
      </body>
  </html>
