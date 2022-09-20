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

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $veiculos = Veiculo::orderBy('veiculo');
        return view('veiculo.index')->with(compact('veiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $veiculo = null;
        $modelos = Modelo::orderBy('modelo')->get();
        return view('veiculo.form')->with(compact('veiculo', 'modelos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $veiculo = new Veiculo();
        $veiculo->fill($request->all());
        $veiculo->save();
        return redirect()
            ->route('veiculo.index')
            ->with('success', 'Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $veiculo = Veiculo::find($id);
        return view('veiculo.show')->with(compact('veiculo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $veiculo = Veiculo::find($id);
        $modelos = Modelo::orderBy('modelo')->get();
        return view('veiculo.form')->with(compact('veiculo', 'modelos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $veiculo = Veiculo::find($id);
        $veiculo->fill($request->all());
        $veiculo->save();
        return redirect()
            ->route('veiculo.index')
            ->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $veiculo = Veiculo::find($id);
        $veiculo->delete();
        return redirect()
            ->route('veiculo.index')
            ->with('danger', 'Removido com sucesso!');
    }
}
