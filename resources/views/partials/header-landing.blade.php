<!-- Header -->
<header id="header">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
      <a href="" class="navbar-brand scrollto">
        <img id="logonav" src="{{ asset('img/logo-prelibato.png') }}" width="150" alt="logo navbar" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon d-flex justify-content-center"><i class="align-self-center fa fa-ellipsis-h"></i></span>
      </button>

      {{-- <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="close"><i class="fa fa-times" aria-hidden="true"></i></button>
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')."#cosa-facciamo"}}">cosa facciamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('home')."#metodo"}}">come lavoriamo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('portfolio')}}">portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://prelibato.eu/blog">blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contatti')}}">contattaci</a>
          </li>
          <li class="nav-item">
            <div class="social-links">
              <a target="_blank" rel="noopener noreferrer" href="http://www.facebook.com/prelibato1" class="facebook"><i class="fa fa-facebook"></i></a>
              <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/_prelibato_/" class="instagram"><i class="fa fa-instagram"></i></a>
              <a target="_blank" rel="noopener noreferrer" href="https://www.linkedin.com/company/prelibatosrl " class="linkedin"><i class="fa fa-linkedin"></i></a>
              <a target="_blank" rel="noopener noreferrer" href="mailto:info@prelibato.eu" class="linkedin"><i class="fa fa-envelope-o"></i></a>
            </div>
          </li>
        </ul>
      </div> --}}

      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li id="contact" class="nav-item"><span></span><span></span><span></span><span></span>
            <a class="nav-link" href="{{route('contatti')}}">Prenota consulenza</a>
          </li>
        </ul>
      </div>

    </nav>
  </div>
</header>  <!-- fine Header -->
