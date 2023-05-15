@if (Route::currentRouteName()=='register')
<form class="box-login  my-5" method="POST" action="{{route('register')}}">
  @csrf
  <div  class="mb-3">
    <label class="form-label"> {{__('message.nome')}} </label>
    <input type="text" name="name" class="@error('name') is-invalid @enderror form-control">
  </div>
  
  <div class="mb-3">
      <label class="form-label "> {{__('message.cognome')}} </label>
      <input type="text" name="surname" class="@error('surname') is-invalid @enderror form-control">
  </div>

  <div class="mb-3">
      <label class="form-label "> {{__('message.email-address')}} </label>
      <input type="email" name="email" class="@error('email') is-invalid @enderror form-control">
  </div>

  <div class="mb-3">
      <label class="form-label"> {{__('message.password')}} </label>
      <input type="password" name="password" class="@error('password') is-invalid @enderror form-control">
  </div>

  <div class="mb-3">
      <label class="form-label "> {{__('message.conferma-password')}} </label>
      <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror form-control">
  </div>

  {{-- <button type="submit" class="btn cust-button">Submit</button> --}}
  <div  class="prova  my-5 me-5"> 
    <button type="submit" class=" fancy btn cust-button cust-text text-decoration-none "> 
    <span class="top-key"></span>
    <span class="text text-center"> Submit </span>
    <span class="bottom-key-1"></span>
    <span class="bottom-key-2"></span>
    </button>

</div>

</form>


  @elseif(Route::currentRouteName()=='login')
  <div class="box-login">
    <form class="my-5" method="POST" action="{{route('login')}}">
      @csrf
        <div class="mb-3">
          <label class=""> {{__('message.email-address')}} </label>
          <input type="email" name="email" class="@error('email') is-invalid @enderror form-control">
        </div>

        <div class="mb-3">
          <label class=""> {{__('message.password')}} </label>
          <input type="password" name="password" class="@error('password') is-invalid @enderror form-control">
        </div>

      {{-- <button type="submit" class="btn cust-button text-light">Submit</button> --}}
      <div  class="prova  my-5 me-5"> 
        <button type="submit" class=" fancy btn cust-button cust-text text-decoration-none "> 
        <span class="top-key"></span>
        <span class="text text-center"> Submit </span>
        <span class="bottom-key-1"></span>
        <span class="bottom-key-2"></span>
        </button>
        
    </div>
    </form>
  </div>

@endif