<?php

namespace App\Http\Controllers;

use App\Mail\VideogameDeleteMail;
use Illuminate\Http\Request;
use App\Videogame;
use Illuminate\Support\Facades\Mail;

class ApiController extends Controller
{
    public function getVideogames() {

        $videogames = Videogame::all();

        return json_encode($videogames);
    }

    //se non fosse stato un link avrei usato il json_decode
    public function deleteVideogame($id) {

        $videogame = Videogame::findOrFail($id);
        $videogame -> delete();
        //la mail va mandata dopo aver compiuto l'azione delete

        Mail::to('test@test.com') -> send(new VideogameDeleteMail());//per poterli usare devo importarli sopra con 'use'
        Mail::to('admin@sito.com') -> send(new VideogameDeleteMail());

        return redirect() -> route('home');
    }
    
}
