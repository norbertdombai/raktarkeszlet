<?php

namespace App\Http\Controllers;

use App\Models\Raktar;
use Illuminate\Http\Request;

class RaktarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Raktar::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('raktar.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $raktar = new Raktar();
        //$raktar->id = $request->id; Az azonosítót hagyjuk, hogy kezelje az adatbázis, minden egyes új sor beszúrásánál automatikusan növekedni fog, ezáltal biztosítja, hogy minden rekordunk egyértelműen azonosítható lesz.
        $raktar->cikkszam = $request->cikkszam;
        $raktar->megnevezes = $request->megnevezes;
        $raktar->ar = $request->ar;
        $raktar->raktaron = $request->raktaron;
        $raktar->save();

        //return redirect('/raktar/list');
        return redirect('/raktarkeszlet/list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Raktar  $project
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Raktar::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Raktar  $project
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $raktar = Raktar::find($id);
        return view('raktar.edit', ['raktar' => $raktar]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Raktar  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $raktar = Raktar::find($id); // a változó nevét is azért érdemes átírni
        //$raktar->id = $request->id; Ezt ne változtassuk, hagyjuk, hogy kezelje az adatbáziskezelő
        $raktar->cikkszam = $request->cikkszam;
        $raktar->megnevezes = $request->megnevezes;
        $raktar->ar = $request->ar;
        $raktar->raktaron = $request->raktaron;
        $raktar->save();

        return redirect('/raktarkeszlet/list'); // Ilyen útvonal nem létezik
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Raktar::find($id)->delete();
        return redirect('/raktarkeszlet/list'); // Ilyen útvonal nem létezik
    }

    public function list()
    {
        $raktarkeszlet = Raktar::all();
        return view('raktar.list', ['raktarkeszlet' => $raktarkeszlet]);
    }

}
