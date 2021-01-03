<!DOCTYPE html>
<html lang="it">
    <head>
      @include('partials.head')

    </head>
    <body>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GZPVWG"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      @include('partials.header')

      @yield('content')

      <script type='text/javascript'>
      var _hoid = _hoid || []; _hoid.push('ho_NzpZa6vjVxe4YkSAgR1P5MtmWyJUdfXT7sDFqQ8bcC0wE2n');
      var heyopath = (('https:' == document.location.protocol) ? 'https://www.heyoliver.com/webroot/ho-ui/v2/' :
      'http://www.heyoliver.com/webroot/ho-ui/v2/');
      var heyop = (('https:' == document.location.protocol) ? 'https://' : 'http://');
      var heyospt = document.createElement('script'); heyospt.type = 'text/javascript';
      heyospt.async = true; heyospt.src = heyopath + 'ho2.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(heyospt, s);
      </script>
  <!-- End of Hey Oliver  -->
      @include('partials.scripts')
        <p class="popupBubbly text-center">click here</p>
      <!-- Hey Oliver -->
    </body>
</html>
