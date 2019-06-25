<?php

namespace App\Http\Controllers;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

use App\Reto;
use App\Solucion;
use Auth;
use Session;
use DB;
use Illuminate\Http\Request;

class RetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("admin.Reto.list");
        
    }
    public function getretos(){
        //$programas = DB::table("Programa")->select("*")->get()->toArray(); 
        //$competencias = DB::table("Competencia")->select("*")->get()->toArray(); 
        //$data = array($programas,$competencias);
        //return  response()->json($data,200);
        $retos = DB::table("Retos")->select("*")->get()->toArray();
        $data = $retos;
        return  response()->json($data,200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        dd("store");
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
       /* $reto = DB::table("Retos")->orderBy("id","desc")->first();
        $id = $reto->id +1;
        $file = $request->file("url_imagen_e");
        $nombre = "reto".$id.".".$file->getClientOriginalExtension();
        $file->move("imgreto/",$nombre);

        $id = DB::table('Retos')->insertGetId(
            ["enunciado" => $request["enunciado"],
            "descripcion" => $request["descripcion"],
            "url_imagen" => $nombre]
        );*/
        // $reto = new Reto;
        // $retoid = Reto::all()->last();
        // $file = $request->file("url_imagen");
        // $nombre = md5("reto".($retoid->id+1)).".".$file->getClientOriginalExtension();

        // $file->move("imgreto/",$nombre);
        // $reto->enunciado = $request->enunciado;
        // $reto->descripcion = $request->descripcion;
        // $reto->url_imagen=$nombre;
        // $reto->save();

        $reto = new Reto;
        $retoid = Reto::all()->last();
        $file = $request->url_imagen->store('public/imgReto');
        //$file = $request->file("url_imagen");
        $nombre = explode('/',$file);
        $reto->enunciado = $request->enunciado;
        $reto->descripcion = $request->descripcion;
        $reto->url_imagen=$nombre[2];
        $reto->save();
        
        return redirect('admin/retos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reto  $reto
     * @return \Illuminate\Http\Response
     */
    public function show(Reto $reto)
    {
        dd("show");
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reto  $reto
     * @return \Illuminate\Http\Response
     */
    public function edit(Reto $reto)
    {
        dd("edit");
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reto  $reto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reto $reto)
    {
       // dd(Str::after($file,'/'));
        Storage::delete($reto->url_imagen);
        $file = $request->file('url_imagen_e')->store('public/imgReto');
        //$file = $request->url_imagen_e->store('imgReto');
        $nombre = explode('/',$file);
        $reto->enunciado = $request->enunciado;
        $reto->descripcion = $request->descripcion;
        if($file){
            $reto->url_imagen = $nombre[2];
        }
        $reto->save();
        return redirect('admin/retos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reto  $reto
     * @return \Illuminate\Http\Response
     */
    public function destroy($reto)
    {
       // $solucion = Solucion::where("id_reto","=",$reto)->select("*")->get();
       $cant = 0;
        if($cant==0){
            $id = md5("reto".$reto);
            //Storage::delete("imgreto/".$id.".jpg");
            Reto::destroy($reto);
        return $cant;
        }else{
            return $cant;
        }
    }
}
