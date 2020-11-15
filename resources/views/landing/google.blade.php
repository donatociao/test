<!DOCTYPE html>
  <html lang="it">
      <head>
        @include('partials.buono.head-google')
        <!-- Hotjar Tracking Code for https://prelibato.eu/metodo-buono -->
        <script>
          (function(h,o,t,j,a,r){
          h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
          h._hjSettings={hjid:1789779,hjsv:6};
          a=o.getElementsByTagName('head')[0];
          r=o.createElement('script');r.async=1;
          r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
          a.appendChild(r);
          })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>
        <script src="https://kit.fontawesome.com/1b1dda8dd0.js" crossorigin="anonymous"></script>
      </head>
      <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GZPVWG"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        @include('partials.buono.header-food')
        @include('partials.buono.intro-food')
        @include('partials.buono.value-food')

        <main id="main">
            @include('partials.buono.form-google')
        </main>

        @include('partials.scripts-landing')
      </body>
  </html>
