<form action="{{route('select.language',$lang)}}" method="GET">
    @csrf
    <button class="btn btn-bandierine" type="submit">
        <img src="{{asset('vendor/blade-flags/language-'.$lang.'.svg')}}" class="bandiera" alt="">
        {{-- @dd('img') --}}
    </button>
</form> 

