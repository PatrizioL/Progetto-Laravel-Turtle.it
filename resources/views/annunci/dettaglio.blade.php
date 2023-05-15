<x-layout>
    <x-header title="{{$annuncios->name}}" />
        <div class="container-fluid my-5 d-flex justify-content-center ">
            <div class="row ">
                <div class="col-12 my-5 justify-content-center ">
                    @if($annuncios->images)
                    <div class="swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            @foreach($annuncios->images as $image)
                            <div class="swiper-slide d-flex justify-content-center  @if($loop->first)active @endif">
                                <img src="{{Storage::url($image->path)}}" alt="immagine segna posto" class="img-fluid">
                            </div>
                            @endforeach
                            <!-- Slides -->
                    @else
                            <div class="swiper-slide d-flex justify-content-center"><img src="https://picsum.photos/500" alt="immagine segna posto" class="img-fluid"></div>
                            <div class="swiper-slide d-flex justify-content-center"><img src="https://picsum.photos/502" alt="immagine segna posto" class="img-fluid"></div>
                            <div class="swiper-slide d-flex justify-content-center"><img src="https://picsum.photos/503" alt="immagine segna posto" class="img-fluid"></div>
                            <div class="swiper-slide d-flex justify-content-center"><img src="https://picsum.photos/504" alt="immagine segna posto" class="img-fluid"></div>
                        </div>
                    @endif
                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
                <div class="col-12 my-5 text-start card-dettaglio">
                    <h3 class="text-center pb-3">{{$annuncios->getNameSubstring()}}</h3>
                    <p>{{$annuncios->getDescriptionSubstring()}}</p>
                    <p class="lead"> {{__('message.prezzo')}} :€{{$annuncios->price}}</p>
                    <p> {{__('message.pubblicato-il')}} :{{$annuncios->created_at->format('Y/d/m')}}</p>
                    <p class="pb-3"> {{__('message.venduto-da')}} :{{$annuncios->user->getUserSubstring()}}</p>
                    <a class="text-white " href="{{route('homepage')}}">
                <div class="prova fancy"> 
                <span class="top-key"></span>
                <span class="text text-center"> {{__('message.home')}} </span>
                <span class="bottom-key-1"></span>
                <span class="bottom-key-2"></span>
                </div>
                    </a>
                </div>
            </div>
        </div>
    </x-layout>