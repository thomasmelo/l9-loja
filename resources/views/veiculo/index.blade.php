@extends('layouts.base')
@section('conteudo')
<h1>
    <i class="bi bi-car-front-fill"></i>
    Veículos de {{ Auth::user()->name }} 
    - 
    <a href="{{ route('veiculo.create') }}" class="btn btn-dark">
        <i class="bi bi-plus-lg"></i>
        Adicionar
    </a>
</h1>
{{-- PESQUISA --}}
<form action="{{ route('veiculo.index') }}" method="get" class="hstack gap-3 rounded border border-secondary p-2">
    <input class="form-control me-auto" type="text" placeholder="Digite Placa ou Modelo ou Marca"
        aria-label="Pesquisar..." name="search">
    <input class="form-control me-auto" type="number" placeholder="Valor Mínimo" 
        aria-label="Valor Mínimo..." name="minimo" id="minimo" min="0">
    <input class="form-control me-auto" type="number" placeholder="Valor Máximo" aria-label="Valor Máximo..." 
        aria-label="Valor Máximo..." name="maximo"  id="maximo" min="0">
    <input type="submit" value="Pesquisar" class="btn btn-secondary">   
    <div class="vr"></div>
    <a href="{{ route('veiculo.index') }}" class="btn btn-outline-danger">Limpar</a>  
</form>
{{-- /PESQUISA --}}

{{-- ALERTAS --}}
@include('layouts.alerts')

{{-- PAGINAÇÃO --}}
{{ 
$veiculos->appends([ 'search' => request()->get('search'), 'minimo' => request()->get('minimo'), 'maximo'=>request()->get('maximo')])->links() 
}}

<table class="table table-striped table-responsive table-striped table-hover">
    <thead>
        <tr>
            <th>Ações</th>
            <th>Cód.:</th>
            <th>Propriétário(a)</th>
            <th>Modelo/Marca</th>
            <th>Placa</th>
            <th>Valor</th>
            <th>foto</th>
            <th>Criado</th>
            <th>Atualizado</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($veiculos as $veiculo)
            <tr>
                <td class="col-md-1">
                    <div class="flex-col">
                        <a href="{{ route('veiculo.show', ['id'=>$veiculo->id_veiculo]) }}" class="btn btn-primary m-1">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('veiculo.edit', ['id'=>$veiculo->id_veiculo]) }}" class="btn btn-success m-1">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" 
                            data-bs-target="#modalExcluir"                           
                            data-bs-url="{!! route('veiculo.destroy', ['id' => $veiculo->id_veiculo]) !!}"
                            data-bs-identificacao="Placa :{{$veiculo->placa}}">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </td>
                <td>{{ $veiculo->id_veiculo}}</td>
                <td>{{ $veiculo->usuario->name}}</td>
                <td>{{ $veiculo->modelo->modelo}} / {{ $veiculo->modelo->marca->marca }}</td>                               
                <td>{{ $veiculo->placa}}</td>
                <td>{{ $veiculo->valor}}</td>
                <td>
                     @if($veiculo->foto)
                    <img src="{{ url("storage/{$veiculo->foto}") }}" class="img-thumbnail">
                    @endif
                </td>
                <td>{{ $veiculo->created_at->format('d/m/Y')}}</td>
                <td>{{ $veiculo->updated_at->format('d/m/Y')}}</td>
            </tr>
            @endforeach 
        </tbody>
</table> 


@endsection

{{-- MODAL EXCLUIR --}}
@include('layouts.modalExcluir')

@section('scripts')
    @parent
@endsection