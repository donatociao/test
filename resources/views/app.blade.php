<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
      @include('partials.head')
    </head>
    <body>
      <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId            : '671623543590916',
          autoLogAppEvents : true,
          xfbml            : true,
          version          : 'v6.0'
        });
      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js";
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      };
    </script>
    <script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GZPVWG" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->

      @yield('content')

        @include('partials.scripts')
    </body>
</html>
