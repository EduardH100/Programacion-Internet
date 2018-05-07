<?php

namespace App\Http\Controllers;

use App\Archivo;
use Illuminate\Http\Request;

class ArchivoController extends Controller
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
    public function create()
    {
        return view('archivos.formArchivo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $archivo = $request->file('archivos');  
       $nombreOriginal = $archivo->getClientOriginalName();
       $size = $archivo->getClientSize();
       $mime = $archivo->getMimeType();
      
      if($request->input('origen_type') == 'Usuario'){
        $origenType = 'App\user';
      }
      
       if($request->hasFile('archivos')){
         
//          $request->archivo->storeAs('', $nombreOriginal);            //Carga los archivos con sus nombres originales
          $fs_name = $request->archivo->store();                        //Carga archivos generandoles un nombre aleatorio
         
          Archivo::create([
            'origen_id' => $request->input('origen_id'), 
            'origen_type' => $origenType, 
            'original_name' => $nombreOriginal,
            'fs_name' => $fs_name,
            'mime' => $mime,
            'size' => $size,
            'directorio' =>  ''
          ]);
         
//            $archivo = $request->file('archivos'); 
       }
      
      return redirect()->back();
     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function show(Archivo $archivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function edit(Archivo $archivo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archivo $archivo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Archivo  $archivo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archivo $archivo)
    {
        if (\Storage::exists($archivo->fs_name)) {
            \Storage::delete($archivo->fs_name);
            $archivo->delete();
        } else {
            return redirect()->back();//Mensaje NO SE ENCONTRÓ ARCHIVO
        }
        
        return redirect()->back();//ELIMINADO CON EXITO
    }
  
    public function descarga(Archivo $archivo)
    {
        if (\Storage::exists($archivo->fs_name)) {
          $headers = ['Content-Type' => $archivo->mime];
          return \Storage::download($archivo->fs_name, $archivo->original_name, $headers);
      } else {
          return redirect()->back();
      }
    }
}
