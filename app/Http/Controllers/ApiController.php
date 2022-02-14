<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Videogame;


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
        return redirect() -> route('home');
    }
}
