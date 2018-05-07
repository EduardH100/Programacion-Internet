<?php

namespace App\Http\Controllers;

use App\ServSocial;
use Illuminate\Http\Request;

class ServSocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.usuariosIndex', compact('usuarios')); 
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
     * @param  \App\ServSocial  $servSocial
     * @return \Illuminate\Http\Response
     */
    public function show(ServSocial $servSocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServSocial  $servSocial
     * @return \Illuminate\Http\Response
     */
    public function edit(ServSocial $servSocial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServSocial  $servSocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServSocial $servSocial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServSocial  $servSocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServSocial $servSocial)
    {
        //
    }
}
