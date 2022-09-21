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
{{-- ALERTAS --}}
@include('layouts.alerts')
<table class="table table-striped table-responsive table-striped table-hover">
    <thead>
        <tr>
            <th>Ações</th>
            <th>Cód.:</th>
            <th>Propriétário(a)</th>                        
            <th>Modelo/Marca</th>                        
            <th>Placa</th>                        
            <th>Valor</th>                        
            <th>Criado</th>
            <th>Atualizado</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($veiculos->get() as $veiculo)
            <tr>
                <td class="col-md-1">
                    <div class="d-flex ">
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