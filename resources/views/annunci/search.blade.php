<x-layout>
    <x-header title="{{$title}}"/>
    <div class="row justify-content-center">
        {{-- @dd($announcements) --}}
        @forelse ($announcements as $announcement)
        <div class="col-12 col-md-4">
            <x-card :announcement="$announcement"/>
        </div>
        @empty
        <div class="col-12 col-md-6">
            <h2> {{__('message.no-articolo')}} </h2>
            <p> {{__('message.primo-annuncio')}} </p>
            <button class="btn btn-success"><a href="{{route('annunci.create')}}"> {{__('message.crea-articolo')}} </a></button>
        </div>
    </div>
</div>
@endforelse
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-6">
            <div>
                {{$announcements->links()}}
            </div>
        </div>
    </div>
</div>
</x-layout>