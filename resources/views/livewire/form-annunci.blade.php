<div class="container box-login">
    <div class="row d-flex justify-content-center">

        <div class="col-12">
        <form class="login-box " wire:submit.prevent="createFormAnnunci">

         <div class="mb-3">
            <label class="form-label"> Categoria </label>
             <select wire:model.debounce.lazy="category" id="" class="form-control @error('category') is-invalid @enderror">
              @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
             </select>
         </div>

    <div class="mb-3">
      <label class="form-label"> {{__('message.titolo')}} </label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model.debounce.lazy="name">
    </div>

    <div class="mb-3">
        <label class="form-label "> {{__('message.descrizione')}} </label>
        <textarea  class="form-control @error('description') is-invalid @enderror" wire:model.debounce.lazy="description"></textarea>
    </div>

    <div class="mb-3">
        <label class="form-label"> {{__('message.prezzo')}} </label>
        <input type="number" step="0.1" class="form-control @error('price') is-invalid @enderror" wire:model.debounce.lazy="price">
    </div>

    <div class="mb-3">
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*')is-ivalid @enderror" placeholder="img">
            @error('temporary_images.*')
                <p class="text-danger mt-2">{{$message}}</p>
            @enderror
    </div>

    {{-- <button  class="btn cust-button"></button> --}}
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

@if (!empty($images))
 <div class="col-12 my-5">
    
    <div class="container my-5">
            <p> {{__('message.anteprima-foto')}} </p>
            <div class="row border rounded shadow ">
                @foreach($images as $key => $image)
                    <div class="col-12 my-3">
                        <div class="img-fluid preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}})"></div>
                        <button type="button" class="btn btn-danger shadow d-block text-center mt-2 mx-auto" wire:click="removeImage({{$key}})"> {{__('message.cancella')}} </button>
                    </div>
                @endforeach
            </div>
        </div>
   </div> 

@endif
</div>   
</div>
 
  





