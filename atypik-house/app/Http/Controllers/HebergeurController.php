<?php

namespace App\Http\Controllers;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Avis;
use App\Models\Logement;
use App\Models\Restauration;
use App\Models\Conciergerie;
use App\Models\Hebergeur;

use Illuminate\Http\Request;

class HebergeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hebergeurs = Hebergeur::all();
        return view('devenir-hote',['hebergeurs' => $hebergeurs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ajout_hebergement');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Hebergeur::create($request->all());        
        return redirect('/'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $h = Hebergeur::find($request->id);
        $h->update($request->all());
        return redirect('/show/'.$request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return redirect ("/");
    }

}
