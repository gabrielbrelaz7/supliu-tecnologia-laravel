<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Faixa;

class FaixaController extends Controller
{
    public function index($idAlbum) {

        $faixas = Faixa::where('album_id', $idAlbum)->get();

        return view('faixas', ['faixas' => $faixas, 'idAlbum' => $idAlbum ]); 
    }
    

    public function store(Request $request) {

        $faixa = new Faixa;
        $faixa->faixa = $request->faixa;
        $faixa->nome = $request->nome;
        $faixa->duracao = $request->duracao;
        $faixa->album_id = $request->album_id;

        $faixa->save();
        
        // Caso utilize modelo de tabela no sistema
        // return redirect('/faixas/' . $faixa->album_id)->with('msg' , 'Faixa criada com sucesso!');
        
        return redirect('/')->with('msg' , 'Faixa criada com sucesso!');
    }


    public function destroy($idFaixa) {

        Faixa::where('id', $idFaixa)->delete();
        
        // Caso utilize modelo de tabela no sistema
        // return redirect('/faixas/' . $idAlbum)->with('msg' , 'Faixa excluida com sucesso!');

        return redirect('/')->with('msg' , 'Faixa excluída com sucesso!');

    }


}   
