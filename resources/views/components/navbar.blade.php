
<nav class="mini-nav">
  <div class="container-fluid items-mininav">
    <div class="row items-mininav container-fluid">
      <div class="col-4 col-md-4 col-lg-4 d-flex  items-mininav ">
      <ul class="pe-5">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle revisore2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{__('message.lingue')}}
          </a>
          <ul class="dropdown-menu colore-mini-nav">
            <li class="dropdown-item dropdown-custom d-flex justify-content-center">

              <x-_locale  lang="it" /> <p class="ms-3 text-light">ITA</p>
            </li>

            <li class="dropdown-item dropdown-custom d-flex justify-content-center">
              <x-_locale lang="en" /> <p class="ms-3 text-light">ENG</p>
            </li>

            <li class="dropdown-item dropdown-custom d-flex justify-content-center">
              <x-_locale lang="es" /> <p class="ms-3 text-light">ESP</p>
            </li>

            </ul>
          </li>
          </ul>
      </div>
      @guest
      <div class="container-fluid col-8">
      <div class="row text-center container-fluid">
          <div class="col-5 col-md-5 col-lg-3 nav-item mx-2">
            <a class="nav-link revisore2 text-light" href="{{route('register')}}">{{__('message.registrati')}}</a>
          </div>
          <div class="col-5 col-md-5 col-lg-3 nav-item">
            <div class=" nav-item">
            <a class="nav-link revisore2 mx-3 text-light" href="{{route('login')}}">Login</a>
          </div>

        </div>
      </div>
        @else
      <div class="container col-3">
        <div class="row">
          <div class="col-3">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle revisore2 mx-2" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{__('message.benvenuto')}} {{Auth::user()->name}}
              </a>
              <ul class="dropdown-menu colore-mini-nav">
                <li><a class="dropdown-item text-light" id="logout-button" href="{{route('logout')}}">Logout</a>
                  <form method="POST" id="logout-form" action="{{route('logout')}}">@csrf</form>
                </li>
              </ul>
            </li>
          </div>
        </div>
      </div>
    </div>

        <div class="col-2 col-md-4 col-lg-2 items-mininav">
        @if (Auth::user()->is_revisor)
        <li>
          <a class="nav-link revisore mx-2" href="{{route('revisor.index')}}"> {{__('message.annunci-revisore')}}:
            <span>{{App\Models\Annuncio::toBeRevisionedCount()}}</span>
          </a>
        </li>
        @endif

        </div>
        @endguest
      </div>
  </nav>

{{-- nav grande --}}

<nav id="navbar" class="navbar navbar-expand-lg cust-nav colore-nav sticky-top p-0">
  <div class="container-fluid p-0">
    <a class="navbar-brand" href="{{route('homepage')}}"><img id="logo" src="/img/logo.png" alt="" class="cust-logo"></a>
    <button class="navbar-toggler colore-nav" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse colore-nav" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('homepage')}}"> {{__('message.home')}} </a>
        </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{__('message.categorie')}}
            </a>
            <ul class="dropdown-menu colore-nav">
              @foreach ($categories as $category)
              <li>
                <a class="dropdown-item" href="{{route('categoryShow',compact('category'))}}">{{$category->name}}</a>
              </li>
              @endforeach
            </ul>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('annunci.indice')}}"> {{__('message.annunci')}} </a>
          </li>
          <li class="nav-item">
            <a href="{{route('chi_siamo')}}" class="nav-link"> {{__('message.chi-siamo')}} </a>
          </li>
          </ul>
{{-- serch --}}
            <form class="d-flex" role="search" action="{{route('announcements_search')}}">
              @csrf
              <input name="searched" class="form-control" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark ricerca" type="submit"><i class="fa-solid fa-magnifying-glass text-white fa-2x"></i>
              </button>
            </form>

        </div>
      </nav>