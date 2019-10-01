<?php

namespace App\Http\Controllers;

use App\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function index() {
        $filmes = Filme::all();

        return view('filmes')->with('filmes', $filmes);
    }

	public function create(Request $request){
		$filme = new Filme;
        $filme->nomefilme = $request->nomefilme;
        $filme->autorfilme = $request->autorfilme;
		$filme->save();
		return redirect()->back();
	}    

    public function delete($id) {
        $filme = Filme::find($id);
        $filme->delete();

        return redirect()->back();
    }      

    public function detail($id) {
        $filme = Filme::find($id);
        return view('detail')->with('filme', $filme);
    }

	public function update($id, Request $request){    
		$filme = Filme::find($id);
        $filme->nomefilme = $request->nomefilme;
        $filme->autorfilme = $request->autorfilme;
		$filme->update();
		return redirect('/');
	}    
}
