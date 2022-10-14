<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

# Envio de E-mail
use Illuminate\Support\Facades\Mail;
use App\Mail\VeiculoInformacoes;

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
    public function index(Request $request)
    {
        $search = $request->get('search', null);
        $minimo = $request->get('minimo', null);
        $maximo = $request->get('maximo', null);
        
        // estaciar o objecto e retornar os dados cdos seus relacionamentos
        $veiculos = Veiculo::with([
                                    'modelo.marca',
                                    'modelo.acessorios',
                                    'usuario'
                                ])->where('id_user',Auth::user()->id)
                                  ->where( function ($query) use ($search, $minimo, $maximo) {

                                    if($search){
                                        $query->where('veiculos.placa', 'like', "%{$search}%");
                                        //pesquisar pelo nome do modelo
                                        // forma tradicional
                                        // $query->orWhereHas('modelo', function ($query) use ($search) {
                                        //         $query->where('modelos.modelo', 'like', "%{$search}%");
                                        //     }
                                        // );

                                        // usando a função de forma curta ( Short Arrow )                                        
                                        $query->orWhereHas(
                                            'modelo',
                                            fn ($query) =>
                                            $query->where('modelos.modelo', 'like', "%{$search}%")
                                        );
                                        $query->orWhereHas(
                                            'modelo',
                                            fn ($query) =>
                                            $query->where('modelos.descricao', 'like', "%{$search}%")
                                        );
                                        $query->orWhereHas(
                                            'modelo',
                                            fn ($query) =>
                                            $query->where('modelos.anos_modelo', 'like', "%{$search}%")
                                        );

                                        //pesquisar pelo nome da marca
                                        $query->orWhereHas(
                                            'modelo.marca',
                                            fn($query) =>
                                            $query->where( 'marcas.marca', 'like', "%{$search}%")
                                        );
                                    }

                                    // pesquisar por valores
                                    if($minimo && $maximo){
                                        $query->whereBetween('valor',[$minimo,$maximo]);
                                    }else if($minimo){
                                        $query->where('valor','>=', $minimo );
                                    } else if ($maximo) {
                                        $query->where('valor', '<=', $maximo);
                                    }

                                  })
                                  ->orderBy('placa')
                                  ->paginate(5);
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
        $veiculo->id_user = Auth::user()->id;
        // subir imagem
        if($request->foto){
            // pegar a extesão do arquivo
            $extensao = $request->foto->getClientOriginalExtension();
            $veiculo->foto = $request->foto->storeAS('fotos', date('YmdHis').".".$extensao);
        }
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
        // vertificar se um arquivo foi enviado
        if ($request->foto) {
            //caso exista um arquivo, remove-lo antes de atualizar
            if (Storage::exists($veiculo->foto)) {
                Storage::delete($veiculo->foto);
            }            
        }
        $veiculo->fill($request->all());
        // subir imagem
        if ($request->foto) {
            // pegar a extesão do arquivo
            $extensao = $request->foto->getClientOriginalExtension();
            $veiculo->foto = $request->foto->storeAS('fotos', date('YmdHis') . "." . $extensao);
        }

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


    /**
     * Envia um e-mails com os dados do veículo.
     *
     * @param  \App\Models\veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function email(int $id)
    {
        $veiculo = Veiculo::find($id);
        # Formas de enviar a mensagem por e-mail
        Mail::to('email@do.destinatario')->send(new VeiculoInformacoes($veiculo));
        // Mail::to(Auth::user())->send(new VeiculoInformacoes($veiculo));
        // Mail::to(auth()->user())->send(new VeiculoInformacoes($veiculo));
        
        # Renderizar o HTML do e-mail
        // return (new VeiculoInformacoes($veiculo))->render();

        # Visualizar o e-mail no navegador
        // return new \App\Mail\VeiculoInformacoes($veiculo);

        return redirect()
            ->back()
            ->with('success', 'E-mail enviado com sucesso!');
        
    }

    /**
     * Exibe os dados do veículo em uma área pública.
     *
     * @param  \App\Models\veiculo  $veiculo
     * @return \Illuminate\Http\Response
     */
    public function informacoes(int $id)
    {
        $veiculo = Veiculo::find($id);
        return view('veiculo.informacoes')->with(compact('veiculo'));
    }
}
