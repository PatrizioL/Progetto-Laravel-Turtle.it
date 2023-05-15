<?php

namespace App\Http\Controllers;

use App\Models\Annuncio;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Mycontroller extends Controller
{
    public function homepage()
    {
        $announcements = Annuncio::where('is_accepted',true)->latest()->paginate(8);
        // dd($announcements);
        return view('welcome',compact('announcements'));

    }

    public function searchAnnouncements(Request $request)
    {
        $title='Ecco i risultati della tua ricerca';
        $announcements = Annuncio::search($request->searched)->where('is_accepted', true)->paginate(10);
        return view('annunci/search', compact('announcements','title'));
    }


    public function setLanguage($lang)
    {
        // dd($lang);
        Session::put('locale',$lang);
        return redirect()->back();
    }

    public function chi_siamo()
    {
        return view('chi_siamo');
    }




}
