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

      @include('partials.scripts')

    </body>
</html>
