<x-layout>
    <div class="container-fluid cust-header py-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-center">
                    {{$annunciosCheck ?'Annunci da revisionare':'Non ci sono annunci da revisionare'}}
                </h1>
            </div>
        </div>
    </div>
    @if ($annunciosCheck)
    <div class="container-fluid my-5">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 revisor-annuncio">
                <h2 class="display-2">{{$annunciosCheck->name}}</h2>
                <p>{{$annunciosCheck->description}}</p>
                <h3>{{$annunciosCheck->category->name}}</h3>
                <h3>{{$annunciosCheck->price}}</h3>
                <h3> {{__('message.venduto-da')}} {{$annunciosCheck->user->name}}</h3>
            </div>
            <div class="col-12 col-md-6 col-lg-5">
                @if ($annunciosCheck->images)
                <!-- Slider main container -->
                <div class="swiper revisor-swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        @foreach ($annunciosCheck->images as $image)
                        <div class="swiper-slide d-flex justify-content-center align-content-center"><img  src="{{$image->getUrl(300,200)}}" alt="immagine prodotto" class="img-fluid img-cuborev"></div>
                        @endforeach
                    </div>
                    <!-- If we need navigation buttons -->
                    {{-- <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div> --}}
                </div>
                @else
                <div>
                    <img src="" alt="">
                </div>
                @endif
                <div class="bottoni-revisor">
                    <form action="{{route('accetta.annuncio',['annuncio'=>$annunciosCheck])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        
                        <div class="prova" type="submit"> 
                            <button type="submit" class=" fancy btn cust-button cust-text text-decoration-none "> 
                            <span class="top-key"></span>
                            <span class="text text-center"> Accetta </span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                            </button>
                        </div>
                    </form>
                    <form action="{{route('rifiuta.annuncio',['annuncio'=>$annunciosCheck])}}" method="POST">
                        @csrf
                        @method('PATCH')
                        {{-- <button type="submit" class="btn btn-crea shadow">Rifiuta</button> --}}
                        <div class="prova mb-5" type="submit"> 
                            <button type="submit" class=" fancy btn cust-button cust-text text-decoration-none "> 
                            <span class="top-key"></span>
                            <span class="text text-center"> rifiuta </span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 col-md-12 revisor-label">
                @if ($image->labels)
                    @foreach ($image->labels as $label)
                        <div class="div-label"><p>{{$label}}</p></div>
                    @endforeach
                @endif
            </div>
                <div class="col-12 col-md-12 revisor-circle">
                    <p> {{__('message.adulti')}} 
                        <span class="{{$image->adult}}"></span>
                    </p>
                    <p> {{__('message.satira')}} 
                        <span class="{{$image->spoof}}" ></span>
                    </p>
                    <p> {{__('message.medicina')}} 
                        <span class="{{$image->medical}}" ></span>
                    </p>
                    <p> {{__('message.violenza')}} 
                        <span class="{{$image->violence}}" ></span>
                    </p>
                    <p> {{__('message.razzismo')}} 
                        <span class="{{$image->racy}}" ></span>
                    </p>
                </div>
        </div>
    </div>
    @endif
    @if (Session::has('last_annuncio_id'))
        <div class="container-fluid my-5">
            <div class="row justify-content-center">
                {{-- <div class="col-12 d-flex justify-content-center">
                    <a href="{{route('revisor.undo')}}" class="btn btn-dark">Annulla operazione</a>
                </div> --}}
                <div  class="prova mb-5"> 
                    <a href="{{route('revisor.undo')}}" class=" fancy btn cust-button cust-text text-decoration-none "> 
                    <span class="top-key"></span>
                    <span class="text text-center"> Annulla </span>
                    <span class="bottom-key-1"></span>
                    <span class="bottom-key-2"></span>
                    </a>
                </div>
            </div>
        </div>
    @endif
</x-layout>
                    

