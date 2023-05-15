<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                
                <x-header class="cust-title" title="Turtle Shop"/> 
            </div>
        </div>
    </div>
    

    <div class="container-fluid my-5">
        <div class="row justify-content-center"> 
            @foreach ($announcements as $announcement)
            
            <x-card
            :announcement="$announcement"
            />
            
            @endforeach
        </div>
        <div class="col-12 mb-4 d-flex justify-content-center">
            {{$announcements->links()}}
        </div>
    </div>
</x-layout>


