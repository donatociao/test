<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
<script defer type="text/javascript" src="{{asset('lib/jquery.ihavecookies.min.js')}}"></script>

 <script type="text/javascript">
  $(document).ready(function(){
   // Cookies
   var options = {
       title: "Cookies & Privacy",
       delay: 600,
       expires: 30,
       message: "Questo sito utilizza i cookie per migliorare l'esperienza di navigazione. Acconsenti all’uso.",
       link: "http://prelibato.eu/privacy",
       moreInfoLabel: "Leggi policy.",
       acceptBtnLabel: "Accetto",
       advancedBtnLabel: "Info",
       fixedCookieTypeLabel: "Necessari",
       fixedCookieTypeDesc: "Questi sono i cookies necessari al corretto funzionamento del sito.",
       cookieTypesTitle: "Seleziona i cookie da accettare"
   };

   $('body').ihavecookies(options);
    console.log("Ok cookie");
  });
 </script>



<!-- JS Libs -->
<script src="{{asset('lib/jquery/jquery-migrate.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.min.js')}}"></script>
<script src="{{asset('lib/wow/wow.min.js')}}"></script>
<script src="{{asset('js/wavify.min.js')}}"></script>
<script src="{{asset('js/jquery.wavify.js')}}"></script>
<script src="{{asset('js/anime.min.js')}}"></script>
<script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('js/tweenmax.min.js')}}"></script>

<!-- main js -->
<script src="{{asset('js/menu.js')}}"></script>
<script src="{{asset('js/app.js')}}"></script>
