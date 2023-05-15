<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Annuncio;
use App\Models\Category;
use App\Jobs\RemoveFaces;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class FormAnnunci extends Component
{
    use WithFileUploads;
    public $name;
    public $description;
    public $price;
    public $category;
    public $temporary_images;
    public $images = [];

    protected $rules =
    [
        'name' => 'required|min:5',
        'description' => 'required|min:5',
        'price' => 'required',
        'category' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024',
    ];

    protected $message =
    [
        'name.required' => 'il nome è richiesto',
        'description.required' => 'la descrizione è richiesta',
        'price.required' => 'il prezzo è richiesto',
        'category.required' => 'la catageoria è richiesta',
        'name.min' => 'il nome è troppo corto',
        'description.min' => 'la descrizione è troppo corto',
        'image' => 'il campo :attribute deve essere una immagine',
        'temporary_image' => 'il campo :attribute deve essere una immagine',
        'max' => 'il campo :attribute deve essere massimo 1024 mb',
    ];
    public function render()
    {
        return view('livewire.form-annunci');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                foreach ($this->temporary_images as $image) {
                    $this->images[] = $image;
                }
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }



    public function createFormAnnunci()
    {
        $this->validate();
        $category = Category::findOrfail($this->category);
        $annuncio = $category->annuncios()->create(
            [
                'name' => $this->name,
                'description' => $this->description,
                'price' => $this->price,
                'user_id' => Auth::user()->id,
            ]
        );

        if (count($this->images)) {
            foreach ($this->images as $image) {
                // $annuncio->images()->create(['path' => $image->store('images', 'public')]);
                $newFileName="announcements/{$annuncio->id}";
                $newImage=$annuncio->images()->create(['path'=>$image->store($newFileName,'public')]);

                RemoveFaces::withChain([
                    new ResizeImage($newImage->path , 300, 200),
                    new GoogleVisionSafeSearch($newImage->id),
                    new GoogleVisionLabelImage($newImage->id)
                ])->dispatch($newImage->id);

                // dispatch(new ResizeImage($newImage->path,300,200));
                // dispatch(new GoogleVisionSafeSearch($newImage->id));
                // dispatch(new GoogleVisionLabelImage($newImage->id));

            }

            File::deleteDirectory((storage_path('/app/livewire-tmp')));
        }
        $annuncio->user()->associate(Auth::user());
        $annuncio->save();
        $this->reset();

        return redirect(route('homepage'))->with('message', 'Annuncio pubblicato');
    }

}
