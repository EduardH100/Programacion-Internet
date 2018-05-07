<?php

namespace App\Http\Controllers;

use App\Programa;
use App\User;
use Illuminate\Http\Request;

class UserProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function index(User $user)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function create(User $user)
    {
        $programas = Programa::all()->pluck('programa', 'id')->toArray();
        return view('usuario.userProgramaForm', compact('user', 'programas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, User $user)
    {
//         $user->programas()->attach($request->input('programa_id'));
        $user->programas()->attach($request->input('programa_id'), ['fecha_inicio' => \Carbon\Carbon::now()->toDateString()]);
//         $user->programas()->attach($request->input('programa_id'), ['fecha_inicio' => $request->input('fecha_inicio')]);
        return redirect()->route('usuario.show', $user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, Programa $programa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, Programa $programa)
    {
         $programas = Programa::all()->pluck('programa', 'id')->toArray();
         $user->load('programas');
         $misProgramas = $user->programas->pluck('id')->toArray();
      
        return view('usuarios.userProgramaForm', compact('user', 'programas', 'misProgramas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, Programa $programa)
    {
        $user->programas()->sync($request->input('programa_id'));
//         $user->programas()->sync([$request->input('programa_id') => ['fecha_inicio' => \Carbon\Carbon::now()->toDateString()]]);
      
        return redirect()->route('usuario.show', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @param  \App\Programa  $programa
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, Programa $programa)
    {
        $user->programa()->detach($programa->id);
        return redirect()->route('usuario.show', $user->id);
    }
}
