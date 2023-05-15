<x-layout >
    <x-header title="{{$title}}" />
    <div class="container-fluid my-5">
        <div class="row banner__item justify-content-center">
            @forelse($announcements as $announcement)
            <div class="col-12 col-lg-4 my-5 mx-5 card-indice">
                <div class="inner">
                <div class="cust-card inner-face ">
                    <img src="{{!$announcement->images()->get()->isEmpty()?$announcement->images()->first()->getUrl(300,200):'https://picsum.photos/200'}}" class="ms-4 mt-3 img-fluid img-card" alt="">
                    <h4 class="m-3">{{$announcement->getNameSubstring()}}</h4>
                    <p class="m-3"> {{__('message.descrizione')}} : {{$announcement->getDescriptionSubstring()}}</p>
                    <p class="m-3"> {{__('message.prezzo')}} : € {{$announcement->price}}</p>
                    <p class="m-3"> {{__('message.categoria')}} : {{$announcement->category->name}}</p>
                    <p class="card-footer m-3"> {{__('message.pubblicato-il')}} : {{$announcement->created_at->format('d/m/Y')}}</p>
                    @if(!$announcement->user)
                    <p class="m-3">> {{__('message.venduto-errore')}} </p>
                    @else
                    @if ($announcement->user->name)
                    <p class="m-3"> {{__('message.venduto-da')}} :{{$announcement->user->getUserSubstring()}}</p>
                    @endif
                        <div class="prova d-block d-md-none"> <a class="fancy btn cust-button cust-text text-decoration-none" href="{{route('annunci.dettaglio',$announcement->id)}}">
                            <span class="top-key"></span>
                            <span class="text text-center"> {{__('message.apri')}} </span>
                            <span class="bottom-key-1"></span>
                            <span class="bottom-key-2"></span>
                            </a>
                        </div>    
                    </div>
                  
                    <span class="inner-back">
                        
                    <div class="prova"> <a class="fancy btn cust-button cust-text text-decoration-none" href="{{route('annunci.dettaglio',$announcement->id)}}">
                <span class="top-key"></span>
                <span class="text text-center"> {{__('message.apri')}} </span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
                </a></div>@endif
                
                    </span>
                    </div>
            </div>
            {{-- <div class="col-12 col-lg-4 my-5 mx-5 card-indice">
                <div class="inner">
        <div class="cust-card inner-face">

                <img src="{{!$announcement->images()->get()->isEmpty()?Storage::url($announcement->images()->first()->path):'https://picsum.photos/200'}}" class="img-fluid img-card" alt="">
                <h3 class="m-3">{{$announcement->getNameSubstring()}}</h3>
                <h4 class="m-3">DESCRIZIONE{{$announcement->getDescriptionSubstring()}}</h4>
                <h4 class="m-3">PREZZO : {{$announcement->price}}</h4>
                <h4 class="m-3">CATEGORIA{{$announcement->category->name}}</h4>
                <p class="card-footer m-3">pubblicato il: {{$announcement->created_at->format('d/m/Y')}}</p>
                @if(!$announcement->user)
                <p class="m-3">Venduto da:errore</p>
                @else
                @if ($announcement->user->name)
                <p class="m-3">Venduto da:{{$announcement->user->getUserSubstring()}}</p>
                @endif
                <div class="prova"> <a class="fancy btn cust-button cust-text text-decoration-none" href="{{route('annunci.dettaglio',$announcement->id)}}">
                <span class="top-key"></span>
                <span class="text text-center">apri</span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
                </a></div>
                @endif
            </div>
            </div> --}}
            @empty
            <div class="col-12">
                <div class="alert-warning">
                    <p> {{__('message.no-articolo')}} </p>
                </div>
            </div>
            </div>
        </div>
        <div class="container-fluid my-5">
            <div class="row justify-content-center">
                <div class="col-12 d-flex justify-content-center">
                @endforelse
                {{$announcements->links()}}
            </div>
        </div>
    </div>
</x-layout>
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
        </div>
</div> --}}