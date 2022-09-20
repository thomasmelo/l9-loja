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

class AcessorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acessorios = Acessorio::orderBy('acessorio');
        return view('acessorio.index')->with(compact('acessorios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $acessorio = null;
        $modelos = Modelo::orderBy('modelo')->get();
        return view('acessorio.form')->with(compact('acessorio', 'modelos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $acessorio = new Acessorio();
        $acessorio->fill($request->all());
        $acessorio->save();
        // vincular os modelos ao acessorio
        if ($request->has('modelos')) {            
            $acessorio->adicionarModelo($request->modelos);
        }

        return redirect()
                ->route('acessorio.index')
                ->with('success','Cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acessorio  $acessorio
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $acessorio = Acessorio::find($id);
        return view('acessorio.show')->with(compact('acessorio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acessorio  $acessorio
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $acessorio = Acessorio::find($id);
        $modelos = Modelo::orderBy('modelo')->get();
        return view('acessorio.form')->with(compact('acessorio','modelos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acessorio  $acessorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $acessorio = Acessorio::find($id);
        $acessorio->fill($request->all());
        $acessorio->save();
        /**
         * Atualização dos relacionamentos com `AcessorioModelo`
         */
        $acessorio->removerModelos();

        if ($request->has('modelos')) {
            // foreach ($acessorio->modelos as $modeloAnterior) {
            //     $modeloAnterior->delete();
            // }
            $acessorio->adicionarModelo($request->modelos);
        }
        return redirect()
            ->route('acessorio.index')
            ->with('success', 'Atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acessorio  $acessorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $acessorio = Acessorio::find($id);
        $acessorio->removerModelos();
        $acessorio->delete();
        return redirect()
            ->route('acessorio.index')
            ->with('danger', 'Removido com sucesso!');
    }
}
