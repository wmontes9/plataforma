<?php

namespace App\Http\Controllers;

use App\Solucion;
use Illuminate\Http\Request;
use DB;
use Session;

class SolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.solucion.index");
    }
    public function getSoluciones(){
        $id = Session::get("solucion");
        $soluciones = DB::table("solucions")
        ->join("retos","solucions.id_reto","=","retos.id")
        ->where("retos.id", "=", $id)   
        ->select("solucions.*")
        ->get()->toarray();
        return  response()->json($soluciones,200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Solucion  $solucion
     * @return \Illuminate\Http\Response
     */
    public function show($solucion)
    {
        Session::put("solucion",$solucion);
        return;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solucion  $solucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Solucion $solucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solucion  $solucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solucion $solucion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solucion  $solucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solucion $solucion)
    {
        //
    }
}
