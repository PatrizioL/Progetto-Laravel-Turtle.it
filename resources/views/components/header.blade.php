    @if (Route::currentRouteName()=='homepage')
        <div class="container-fluid">
            <div class="row">
            
                <div class="headerSwiper mySwiper">
                    <div class="swiper-wrapper">

                    <div class="swiper-slide cust-slide bg1">
                        <div class="col-12 ms-3 text-start" id="welcomeAppair" >
                                <div class="col-12">
                                    <h3 id="text-fade2"  class="cust-h3">{{__('message.titolo-header')}}</h3>
                                </div>
                                <div class="col-12">
                                    <h2 id="text-fade"  class="cust-h2">{{__('message.welcome')}}</h2>
                                </div>
                                @Auth
                                <div class="d-flex mt-3">
                                    <a class="text-decoration-none" href="{{route('annunci.create')}}">
                                        <button id="btn-move" class="btn-crea">
                                            
                                            <img class="imgbtn-crea" src="/img/writing.png" alt="">
                                            <span class="pt-3" style="display: inline-block;">{{__('message.crea-annuncio')}}</span>
                                            
                                        </button>
                                    </a>
                                </div>
                            @endAuth
                            </div>
                        </div>

                        
                    <div class="swiper-slide cust-slide bg2">
                        <div class="col-12 ms-3 text-start" id="welcomeAppair" >
                                <div class="col-12">
                                    <h3 id="text-fade2"  class="cust-h3">{{__('message.titolo-header')}}</h3>
                                </div>
                                <div class="col-12">
                                    <h2 id="text-fade"  class="cust-h2">{{__('message.welcome')}}</h2>
                                </div>
                                @Auth
                                <div class="d-flex mt-3">
                                    <a class="text-decoration-none" href="{{route('annunci.create')}}">
                                        <button id="btn-move" class="btn-crea">
                                            
                                            <img class="imgbtn-crea" src="/img/writing.png" alt="">
                                            <span class="pt-3" style="display: inline-block;">{{__('message.crea-annuncio')}}</span>
                                            
                                        </button>
                                    </a>
                                </div>
                            @endAuth
                            </div>
                        </div>



                        <div class="swiper-slide cust-slide bg3">
                            <div class="col-12 ms-3 text-start" id="welcomeAppair" >
                                <div class="col-12">
                                    <h3 id="text-fade2"  class="cust-h3">{{__('message.titolo-header')}}</h3>
                                </div>
                                <div class="col-12">
                                    <h2 id="text-fade"  class="cust-h2">{{__('message.welcome')}}</h2>
                                </div>
                                @Auth
                                    <div class="d-flex mt-3">
                                        <a class="text-decoration-none" href="{{route('annunci.create')}}">
                                            <button id="btn-move" class="btn-crea">
                                        
                                                <img class="imgbtn-crea" src="/img/writing.png" alt="">
                                                <span class="pt-3 " style="display: inline-block;">{{__('message.crea-annuncio')}}</span>
                                    
                                            </button>
                                        </a>
                                    </div>
                                @endAuth
                            </div>
                        </div>

                        </div>
                    </div>


            </div>
        </div>
        
        
        <div class="container-fluid">
            <div class="row text-center">
                <div class=" col-12 col-md-4 col-lg-12 my-5">
                    <h1 class="diplay-1 text-center cust-colortitle">{{$title}}</h1>
                </div> 
            </div>
        </div>

        @elseif(Route::currentRouteName()=='annunci.dettaglio')
        <div class="container-fluid cust-header">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="diplay-1 text-center">{{$title}}</h1>
                </div>
            </div>
        </div>
        @elseif(Route::currentRouteName()=='announcements_search')
        <div class="container-fluid cust-header">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="diplay-1 text-center">{{$title}}</h1>
                </div>
            </div>
        </div>
        @endif