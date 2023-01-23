<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {/*
        $p = new Projet();

        $p->description=$request->description ;
        $p->datedebut=$request->datedebut ;
        $p->datefin=$request->datefin ;
        $p->save();

        return redirect()->route('ajout');    
*/
//Cette technique est plus pertinente quand on insert les donnée pour la premiere fois , l'autre est plus pratique pour faire les mises a jour ! 
        $input = $request->all();
        Projet::create($input);
        return redirect('projetsajout')->with('flash_message','Projet créé');
    }   

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
 
            $projets=Projet::all();


      //      return view('listerprojet',["tabProjet"=>$projet]);
      return view('listerprojet',compact('projets') );

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function edit(Projet $projet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projet $projet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projet  $projet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projet $projet)
    {
        //
    }
}
