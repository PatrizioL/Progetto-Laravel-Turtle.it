<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Annuncio;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class Revisorcontroller extends Controller
{
    public function makeUserRevisor ()
    {
        Mail::to('adminPresto04@gmail.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message','complimenti hai richiesto di diventare revisore');
    }

    public function newRevisor(User $user)
    {
        Artisan::call('presto04:makeUserRevisor',['email'=>$user->email]);

        return redirect(route('homepage'))->with('message','hai reso' .' '.  $user->name .' '. 'revisore');
    }

    public function revisorIndex()
    {
        $annunciosCheck=Annuncio::where('is_accepted',null)->first();
        // dd($annunciosCheck);
        return view('revisor/index',compact('annunciosCheck'));
    }
    
    public function accettaAnnuncio(Annuncio $annuncio)
    {
        $annuncio->setAccepted(true);
        Session::put('last_annuncio_id',$annuncio->id);
        // Prendere più id
        // Session::push('last_annuncio_id',$annuncio);
        return redirect()->back()->with('message','hai accettato l\'articolo');
    }

    public function rifiutaAnnuncio(Annuncio $annuncio)
    {
        $annuncio->setAccepted(false);
        Session::put('last_annuncio_id',$annuncio->id);
        // Prendere più id
        // Session::push('last_annuncio_id',$annuncio);
        return redirect()->back()->with('message','hai rifiutato l\'articolo');
    }

    public function undo()
    {
        $lastAnnuncioId=Session::get('last_annuncio_id');
        $lastAnnuncioId=Annuncio::findorFail($lastAnnuncioId);
        $lastAnnuncioId->is_accepted=null;
        $lastAnnuncioId->save();
        // $lastAnnuncios=Session::get('last_annuncio_id');
        // foreach ($lastAnnuncios as $lastAnnuncio)
        // {
        //     $lastAnnuncio->is_accepted=null;
        //     $lastAnnuncio->save();
        // }

        Session::forget('last_annuncio_id');

        // return redirect()->back()->with('message','ultima operazione annulata');

        return back();
    }
}