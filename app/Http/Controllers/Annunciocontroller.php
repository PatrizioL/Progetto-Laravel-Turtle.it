<?php

namespace App\Http\Controllers;

use App\Models\Annuncio;
use App\Models\Category;
use Illuminate\Http\Request;

class Annunciocontroller extends Controller
{
    public function crea_annuncio()
    {
        return view('annunci/crea');
    }

    public function categoryShow(Category $category)
    {
        return view('annunci/categoryShow', compact('category'));

    }

    public function index()
    {
        $title='Annunci';
        $announcements=Annuncio::where('is_accepted',true)->latest()->paginate(8);
        return view('annunci/indice',compact('announcements','title'));
    }

    public function dettaglio($id)
    {
        $annuncios=Annuncio::findOrFail($id);
        return view('annunci/dettaglio',compact('annuncios'));
    }


}
