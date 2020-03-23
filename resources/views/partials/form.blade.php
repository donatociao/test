  <!-- Footer -->
<svg id="svganime" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 391.06 18.1">
  <style>.cls-1{fill:#fce76d;}</style>
  <path id="footerwave" class="cls-1" d="M391.06,0c-48.88,0-48.88,11.34-97.77,11.34S244.41,0,195.52,0,146.64,11.34,97.76,11.34,48.88,0,0,0V18.1H391.06Z"/>
</svg>
<footer id="footer" class="section-bg">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          {{-- <h3 class="cta-title mt-3">Cerchiamo sempre nuove sfide.</h3>
          <p class="cta-text"><b>Lavoriamo con le persone, per le persone.</b><br>Siamo pronti a rendere le cose più semplici, più utili, più belle e più divertenti. </p> --}}
          <div class="footer-links mb-5">
            <h3 class="contattaci">Prendiamo un caffè?</h3>
            <p class="form-contact">
              <b>Prelibato srl</b><br>Via XXIV Maggio, 9<br>
              <span>84025 Eboli, SA - Italia<span><br><br>
              <b><i class="fa fa-phone"></i></b> <a href="callto:+393270151051"></a>+39 327 01 51 051<br>
              <b><i class="fa fa-phone"></i></b> +39 327 46 43 216<br>
              <b><i class="fa fa-envelope-o"></i></b> info@prelibato.eu<br>
            </p>
            <div class="social-links">
              <a target="_blank" rel="noopener noreferrer" href="http://www.facebook.com/prelibato1" class="facebook"><i class="fa fa-facebook"></i></a>
              <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/_prelibato_/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/company/prelibatosrl " class="linkedin"><i class="fa fa-linkedin"></i></a>
              <a target="_blank" rel="noopener noreferrer" href="mailto:info@prelibato.eu" class="linkedin"><i class="fa fa-envelope-o"></i></a>
            </div>
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/it_IT/sdk.js#xfbml=1&version=v6.0&appId=671623543590916&autoLogAppEvents=1"></script>
            <div class="fb-like mt-5" data-href="https://facebook.com/prelibato1" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>          </div>
        </div>
        <div class="offset-lg-1 col-lg-6">
          <div class="footer-links">
            <h3 class="contattaci">Contattaci</h3>
            <div class="col-lg-12 mb-5">
              <form>
                <div class="form-group">
                  <input type="name" class="form-control" id="name" placeholder="Nome e Cognome">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <input type="mobile" class="form-control" id="mobile" placeholder="Cellulare">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Scrivi qui il tuo messaggio..."></textarea>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Accetto l'informativa sulla <a href="{{route('privacy')}}">Privacy.</a></label>
                </div>
                <button type="submit" class="btn bg-white">Invia</button>
              </form>
            </div>
          </div>
          {{-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
            <script>
              hbspt.forms.create({
	            portalId: "7355049",
	            formId: "15b1228d-bccc-41ba-8c6e-2cf57fe65e7c"
            });
          </script> --}}
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-prelibato text-center">
  <div class="copyright pb-3">
    &copy; Copyright {{ now()->year }} <strong>Prelibato srl - P.IVA 05699060652</strong>. Tutti i diritti riservati. Leggi la nostra <a href="{{route('privacy')}}">Privacy policy.</a>
  </div>
</div>
</footer><!-- fine footer -->
