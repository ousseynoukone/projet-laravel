<?php

namespace App\Http\Controllers;

use App\Models\Phase;
use App\Models\Projet;
use Illuminate\Http\Request;

class PhaseController extends Controller
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
    {

        $id = $request->query('id');
        $cpt = 1 ;

        $phase = Phase::where('idprojet', '=', $id)->orderBy('idphase', 'desc')->first();
        if($phase!=null)
        {
            $cpt = $phase['idphase']+1;


        }
        $tab = array($id,$cpt);





        return view('phaseajout',["tab"=>$tab]);   
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
                //
      
        $input = $request->all();
        $id = $input['idprojet'];
                
      /*  $p = new Phase();

        $p->phase=$request->phase ;
        $p->datedebut=$request->datedebut ;
        $p->datefin=$request->datefin ;
        $p->idProjet=$id ;
        $p->save();
        */
        Phase::create($input);

        return redirect()->route('phases.show', ['phase' => $id]);




        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phase  $phase
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $projet = Projet::find($id);
        $phases = $projet->phases;


        $tab=array(
            $phases,
            $id);

        return view('detail',["tab"=>$tab]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phase  $phase
     * @return \Illuminate\Http\Response
     */
    public function edit(Phase $phase)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phase  $phase
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phase $phase)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phase  $phase
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phase $phase)
    {
        //
    }


}
