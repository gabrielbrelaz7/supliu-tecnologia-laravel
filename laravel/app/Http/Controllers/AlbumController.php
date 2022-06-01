<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Albun;
use App\Models\Faixa;

class AlbumController extends Controller
{
    public function index() {
         
    }

    public function store(Request $request) {

        $album = new Albun;
        $album->nome = $request->nome;
        $album->ano = $request->ano;

        $album->save();

        return redirect('/')->with('msg' , 'Álbum criado com sucesso!');
    }


    public function destroy($idAlbum) {

        Albun::where('id', $idAlbum)->delete();

        return redirect('/')->with('msg' , 'Álbum excluído com sucesso!');
    }


}
