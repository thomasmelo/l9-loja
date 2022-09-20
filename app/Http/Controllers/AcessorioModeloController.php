<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
# Models
use App\Models\{
    Acessorio,
    AcessorioModelo,
    Marca,
    Modelo,
    User,
    Veiculo
};

class AcessorioModeloController extends Controller
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
     * @param  \App\Models\AcessorioModelo  $acessorioModelo
     * @return \Illuminate\Http\Response
     */
    public function show(AcessorioModelo $acessorioModelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AcessorioModelo  $acessorioModelo
     * @return \Illuminate\Http\Response
     */
    public function edit(AcessorioModelo $acessorioModelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AcessorioModelo  $acessorioModelo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AcessorioModelo $acessorioModelo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AcessorioModelo  $acessorioModelo
     * @return \Illuminate\Http\Response
     */
    public function destroy(AcessorioModelo $acessorioModelo)
    {
        //
    }
}
