<?php

namespace App\Http\Controllers;

use App\Models\Contatto;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AddContattoUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contatti = Contatto::where('iduser', auth()->user()->id)->paginate(15);
        return view('rubrica', ['contatti' => $contatti]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $iduser = auth()->user()->id;
        $nome = $request->nome;

        $cellulare = $request->cellulare;
        $email = $request->email;
        $indirizzo = $request->indirizzo;
        $nascita = $request->nascita;
        $note = $request->note;
        $contatto = new Contatto();
        $contatto->iduser = $iduser;
        $contatto->nome = $nome;
        $contatto->cellulare = $cellulare;
        $contatto->email = $email;
        $contatto->indirizzo = $indirizzo;
        $contatto->nascita = $nascita;
        $contatto->note = $note;
        $contatto->save();
        return redirect('rubrica');
        
    }

    public function update(Request $request, $id)
    {
        

        $contatto =  Contatto::where('id', '=', $id)->first();
        if (! Gate::allows('update', $contatto)) {
            abort(403);
        }
        $contatto->nome = $request->nome;
        $contatto->cellulare = $request->cellulare;
        $contatto->email = $request->email;
        $contatto->indirizzo = $request->indirizzo;
        $contatto->nascita = $request->nascita;
        $contatto->note = $request->note;
        $contatto->save();
        return redirect('rubrica');
        

    }
    //Ritorna la view di modcontatto dove vengono passati i dati non modificati e qui è possibile farlo
    public function edit($id)
    {
       $contatto =  Contatto::where('id', '=', $id)->first();

        return view('modcontatto', ['contatto' => $contatto]);
    }

    
    public function search(Request $request)
    {
        $q = '%'.$request ->input('email', '').'%';
        $contatti = Contatto::where(function($query) use($q){
            $query -> where('email', 'LIKE' , $q)
            ->orWhere('nome', 'LIKE', $q)
            ->orWhere('cellulare', 'LIKE', $q)
            ->orWhere('note', 'LIKE', $q);
        })
        ->where('iduser', auth()->user()->id)
        ->paginate(15)
        ;
        return view('rubrica', ['contatti' => $contatti]);
 
 
        
    }

    public function destroy($id)
    {
        $contatto = Contatto::where('id', '=', $id)->first();
        if (! Gate::allows('delete', $contatto)) {
            abort(403);
        }
         $contatto->delete();
         
         return redirect('rubrica');
         
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    
    


}
