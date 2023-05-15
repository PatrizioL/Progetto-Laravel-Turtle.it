    <x-layout >
        <x-header head="Lavora con noi" />

    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1> {{__('message.bio-commerce')}} </h1>
                <p class="h3"> {{__('message.lavora-noi')}} </p>
                @if(!Auth::user()->is_revisor==true)
                <a href="{{route('revisor.make')}}" class="btn btn-warning text-light shadow my-3"> {{__('message.diventa-revisore')}} </a>
                @endif
            </div>
        </div>
    
        {{-- NOSTRA DESCRIZIONE --}}

        <div class="container my-5">
            <div class="row justify-content-around">
                <div class="col-12 col-md-8 col-lg-5 card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img class="presentazione" src="/img/giada-chisiamo.png" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h3 class="card-title"> <i class="fa-brands fa-linkedin solo-card"></i > Giada Monni </h3>
                        <p class="card-text"> sono una webdeveloper junior che ama il fron-tend e vorrebbe anche un giorno diventare Scrum Muster. Mi piace molto l'interazione con gli alri e anche lavorare in gruppo. Sono una persona solare e molto ironica.</p>
                        
                       
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-5 card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/Daniel-chisiamo.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h3 class="card-title"> <i class="fa-brands fa-linkedin solo-card"></i > Daniel Bobarnac </h3>
                        <p class="card-text"> Al momento sto facendo il corso Aulab come full-stack developer.Nel corso della mia esperienza lavorativa penso di aver sviluppato capacita'di lavorare in team e resistenza allo stress per il fatto che ho lavorato in grandi team dove era richiesto di mantenere un certo ritmo lavorativo e gli orari erano variabili.Come punto di forza posso dire di essere molto motivato ad imparare e penso di avere una buona capacita'di analisi.</p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-5 card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/antonio-chisiamo.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h3 class="card-title"> <i class="fa-brands fa-linkedin solo-card"></i > Antonio Raucci </h3>
                        <p class="card-text"> In questo momento sto frequentando il corso Aulab Hackademy come full stack developer. Durante le mie esperienze lavorative ho sviluppato una notevole capacità di lavorare in team, lavorare sotto pressione e delegare i compiti all'interno del team. Penso che il mio punto di forza più grande sia quello di essere una persona molto socievole. </p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-5 card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/patrizio-chisiamo.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h3 class="card-title"> Patrizio Lepore </h3>
                        <p class="card-text"> Avendo alle spalle un escursus di studi centrati sulle materie scientifiche il passo verso il back-end e`stato quasi obbligatorio. </p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-5 card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/carmine-chisiamo.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h3 class="card-title"> Carmine Armenante </h3>
                        <p class="card-text"> Dopo il mio percorso nell'ambito militare , ho capito che quella non era la mia strada e ho deciso di intraprendere la carriera del web developer full-stack </p>
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-12 col-md-8 col-lg-5 card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/ettore-chisiamo.png" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                        <h3 class="card-title"> <i class="fa-brands fa-linkedin solo-card"></i > Ettore Sinani </h3>
                        <p class="card-text"> Al momento sto facendo il corso Aulab come full stack developer. Sono una persona altamente motivata e dedicata, con una forte passione
                            per i miei interessi e obiettivi professionali. Sono sempre alla ricerca di nuove sfide e di modi per migliorare le mie competenze. Sono in grado di lavorare bene in team o in modo
                            indipendente, e sono sempre orientato ai risultati. Sono convinto di poter contribuire in modo significativo all'azienda che mi sceglierà come collaboratore. 
                             </p>
                        </div>
                    </div>
                    </div>
                </div>
                
            
            </div>
        </div>





        {{-- timeline --}}
    

        
            <!-- Slider main container -->
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-8">
                            <div class="swiper-chisiamo cards my-5">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    
                                    
                                <!-- Slides -->
                                <li class="swiper-slide"><img class="img-fluid" src="/img/My_project-1_3.jpg" alt="">
                                </li>
                                <li class="swiper-slide"><img class="img-fluid" src="/img/image-chisiamo1.png" alt="">
                                </li>
                                <li class="swiper-slide"><img class="img-fluid" src="/img/image-marzo.png" alt="">
                                </li>
                                
                                <li class="swiper-slide"><img src="/img/My_project-1_1.jpg" alt="">
                                </li>
                                <li class="swiper-slide"><img src="/img/My_project-1_2.jpg" alt="">
                                </li>
                                <li class="swiper-slide"><img src="/img/imageroberto.png" alt="">
                                </li>
                    
                                ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </div>  

    </x-layout>

            