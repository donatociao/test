<!-- Back-to-top & Preloader -->
<a href="#" class="back-to-top d-none"><i class="fa fa-chevron-up"></i></a>
<div id="preloader"></div>

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
<script type='text/javascript'>
var _hoid = _hoid || []; _hoid.push('ho_NzpZa6vjVxe4YkSAgR1P5MtmWyJUdfXT7sDFqQ8bcC0wE2n');
var heyopath = (('https:' == document.location.protocol) ? 'https://www.heyoliver.com/webroot/ho-ui/v2/' :
'http://www.heyoliver.com/webroot/ho-ui/v2/');
var heyop = (('https:' == document.location.protocol) ? 'https://' : 'http://');
var heyospt = document.createElement('script'); heyospt.type = 'text/javascript';
heyospt.async = true; heyospt.src = heyopath + 'ho2.js';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(heyospt, s);
</script>
