<?php

namespace App\Http\Controllers;

use App\Kleur;
use App\Piste;
use Illuminate\Http\Request;

class PistesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pistes = Piste::latest()->get();
        return view('pistes.index' ,['pistes' => $pistes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pistes.create',[
            'kleurs' => Kleur::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       /* request()->validate([
            'naam' => 'required',
            'kleur_id'=> 'required',
            'lengte'=> 'required'

        ]);


        Piste::create([
            'naam' => $request->naam,
            'kleur_id' => $request->kleur,
            'lengte' => $request->lengte
        ]);*/

 Piste::create($this->validatePiste());



        return redirect('/pistes');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Piste  $piste
     * @return \Illuminate\Http\Response
     */
    public function show(Piste $piste)
    {
        $pistes = Piste::latest()->get();
        return view('/pistes.show', ['piste' =>$piste , 'pistes' => $pistes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Piste  $piste
     * @return \Illuminate\Http\Response
     */
    public function edit(Piste $piste)
    {

        return view('pistes.edit', compact('piste'),[
            'kleurs' => Kleur::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Piste  $piste
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piste $piste)
    {



        $piste->update($this->validatePiste());

        return redirect(route('pistes.show', $piste));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Piste  $piste
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piste $piste)
    {
        //
    }

    protected function validatePiste()
    {
        return request()->validate([
            'naam' => 'required',
            'kleur_id' => 'required',
            'lengte' => 'required'
            ]);
    }
}
