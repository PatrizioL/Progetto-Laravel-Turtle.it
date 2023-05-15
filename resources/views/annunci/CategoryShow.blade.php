<x-layout>
    <div class="container-fluid cust-header">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
               <h1 class=" mx-3 "> {{__('message.prodotti-categorie')}} <p class="h1"> {{$category->name}} </p></h1>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            
            <x-card
            :category="$category"
            />
        
    </div>
    </div>
</x-layout>
