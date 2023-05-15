@if(Route::currentRouteName()=='categoryShow')
    @forelse ($category->annuncios as $category_annuncio)
    <div id="noHover" class="col-12 col-lg-4 my-5 mx-5 card-indice">
        <div class="inner">
        <div class="cust-card inner-face">
        <img src="{{!$category_annuncio->images()->get()->isEmpty()?$category_annuncio->images()->first()->getUrl(300,200):'https://picsum.photos/200'}}" class="ms-4 mt-3 img-fluid img-card" alt="">
            <h3 class="m-3">{{$category_annuncio->name}}</h3>
            <p class="m-3"> {{__('message.descrizione')}} : {{$category_annuncio->getDescriptionSubstring()}}</p>
            <p class="m-3"> {{__('message.prezzo')}} : €{{$category_annuncio->price}}</p>
            <p class="m-3"> {{__('message.categoria')}} : {{$category_annuncio->category->name}}</p>
            <p class="card-footer m-3"> {{__('message.pubblicato-il')}} : {{$category_annuncio->created_at->format('d/m/Y')}}</p>
            @if ($category_annuncio->user->name)
            <p class="m-3"> {{__('message.venduto-da')}} <DAtag></DAtag>:{{$category_annuncio->user->getUserSubstring()}}</p>
            @endif
            </div>
            <span class="inner-back">
            <div class="prova"> <a class="fancy btn cust-button cust-text text-decoration-none" href="{{route('annunci.dettaglio',$category_annuncio->id)}}">
                <span class="top-key"></span>
                <span class="text text-center"> {{__('message.apri')}} </span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
                </a></div>
            </span>
            </div>
    </div>
    @empty
    <div class="col-12">
        <p class="h1"> {{__('message.no-card')}} </p>
        <p> {{__('message.si-annuncio')}} </p>
        <button class="btn btn-danger"><a href="{{route('annunci.create')}}"> {{__('message.pubblica-articolo')}} </a></button>
    </div>
    @endforelse
    @elseif(Route::currentRouteName()=='annunci.indice')
    @foreach ($annuncios as $annuncio)
    <div class="card-annunci">
        <img src="{{!$annuncio->images()->get()->isEmpty()?$annuncio->images()->first()->getUrl(300,200):'https://picsum.photos/200'}}" class="img-fluid img-card" alt="">
        <h3 class="m-3">{{$annuncio->name}}</h3>
        <p class="m-3"> {{$annuncio->getDescriptionSubstring()}}</p class="m-3">
        <p class="m-3"> {{__('message.prezzo')}} : {{$annuncio->price}}</p class="m-3">
        <p class="m-3"> {{__('message.categoria')}} : {{$annuncio->category->name}}</p>
        <p class="card-footer my-2"> {{__('message.pubblicato-il')}} : {{$annuncio->created_at->format('d/m/Y')}}</p>
        @if ($annuncio->user->name)
        <p class="card-footer my-2"> {{__('message.venduto-da')}} : {{$annuncio->user->getUserSubstring()}}</p>
        @endif
        <div class="prova"> <a class="fancy btn cust-button cust-text text-decoration-none" href="{{route('annunci.dettaglio',$annuncio->id)}}">
                <span class="top-key"></span>
                <span class="text text-center"> {{__('message.apri')}} </span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
                </a></div>
    </div>
    @endforeach
    @elseif(Route::currentRouteName()=='homepage')
    <div id="card-home" class="col-12 col-md-4 col-lg-4 my-5 mx-5 card-indice">

        <div class="cust-card inner-face ">
            <img src="{{!$announcement->images()->get()->isEmpty()?$announcement->images()->first()->getUrl(300,200):'https://picsum.photos/200'}}" class="ms-4 mt-3 img-fluid img-card" alt="">
            <h4 class="m-3">{{$announcement->getNameSubstring()}}</h4>
            <p class="m-3"> {{__('message.descrizione')}} : {{$announcement->getDescriptionSubstring()}}</p>
            <p class="m-3"> {{__('message.prezzo')}} :€ {{$announcement->price}}</p>
            <p class="m-3">{{__('message.categoria')}} : {{$announcement->category->name}}</p>
            <p class="card-footer m-3"> {{__('message.pubblicato-il')}}: {{$announcement->created_at->format('d/m/Y')}}</p>
            @if ($announcement->user->name)
            <p class="m-3">Venduto da:{{$announcement->user->getUserSubstring()}}</p>
            @endif
       <div class="prova"> <a class="fancy btn cust-button cust-text text-decoration-none" href="{{route('annunci.dettaglio',$announcement->id)}}">
                <span class="top-key"></span>
                <span class="text text-center"> {{__('message.apri')}} </span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
                </a>
            </div>

        </div>

    </div>

    @elseif(Route::currentRouteName()=='announcements_search')
    <div id="noHover" class="col-12 col-md-6 col-lg-4 my-5 mx-5 card-indice">

        <div class="cust-card inner-face text-center ">
            <img src="{{!$announcement->images()->get()->isEmpty()?$announcement->images()->first()->getUrl(300,200):'https://picsum.photos/200'}}" class="mt-3 img-fluid img-card" alt="">
            <h4 class="my-3">{{$announcement->getNameSubstring()}}</h4>
            <p>{{$announcement->getDescriptionSubstring()}}</p>
            <p class="my-1"> {{__('message.prezzo')}} :€ {{$announcement->price}}</p>
            <p>{{$announcement->category->name}}</p>
            <p class="card-footer my-1"> {{__('message.pubblicato-il')}} : {{$announcement->created_at->format('d/m/Y')}}</p>
            @if ($announcement->user->name)
            <p class="card-footer my-1"> {{__('message.venduto-da')}} : {{$announcement->user->getUserSubstring()}}</p>
            @endif
            <div class="prova"> <a class="fancy btn cust-button cust-text text-decoration-none" href="{{route('annunci.dettaglio',$announcement->id)}}">
                <span class="top-key"></span>
                <span class="text text-center"> {{__('message.apri')}} </span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
                </a></div>

        </div>

    </div>
    {{-- <div class="card card-annunci inner-face text-cente">
            <img src="{{!$announcement->images()->get()->isEmpty()?$announcement->images()->first()->getUrl(300,200):'https://picsum.photos/200'}}" class="card-img-top" alt="immagine segnaposto">
        <div class="card-body">
            <h4 class="card-title">{{$announcement->getNameSubstring()}}</h4>
            <p class="card-text">{{$announcement->getDescriptionSubstring()}}</p>
            <p class="card-title">{{$announcement->price}}</p>
            <p class="card-title">{{$announcement->category->name}}</p>
            <p class="card-title">Pubblicato da:{{$announcement->user->getUserSubstring()}}</p>
            <a href="{{route('annunci.dettaglio',$announcement->id)}}" class="btn cust-button">Detail</a>
        </div>
    </div> --}}
    @endif


    {{-- <div class="col-12 col-lg-4 my-5 mx-5 card-indice">
        <div class="inner">
        <div class="cust-card inner-face">
        <img src="{{!$category_annuncio->images()->get()->isEmpty()?$category_annuncio->images()->first()->getUrl(300,200):'https://picsum.photos/200'}}" class="ms-4 mt-3 img-fluid img-card" alt="">
            <h3 class="m-3">{{$category_annuncio->name}}</h3>
            <p class="m-3">DESCRIZIONE: {{$category_annuncio->getDescriptionSubstring()}}</p>
            <p class="m-3"> PREZZO: €{{$category_annuncio->price}}</p>
            <p class="m-3"> CATEGORIA: €{{$category_annuncio->category->name}}</p>
            <p class="card-footer m-3">PUBBLICATO IL: {{$category_annuncio->created_at->format('d/m/Y')}}</p>
            @if ($category_annuncio->user->name)
            <p class="m-3">VENDUTO <DAtag></DAtag>:{{$category_annuncio->user->getUserSubstring()}}</p>
            @endif
            </div>
            <span class="inner-back">
            <div class="prova"> <a class="fancy btn cust-button cust-text text-decoration-none" href="{{route('annunci.dettaglio',$category_annuncio->id)}}">
                <span class="top-key"></span>
                <span class="text text-center">apri</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
                </a></div>
            </span>
            </div>
    </div>
    @empty
    <div class="col-12">
        <p class="h1">non sono presenti annunci per questa categoria!</p>
        <p>Corri a crearne uno:</p>
        <a href="{{route('annunci.create')}}"><button class="btn btn-danger">Pubblica articolo</button></a>
    </div> --}}
