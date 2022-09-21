@extends('layouts.base')
@section('conteudo')
<h1>
    <i class="bi bi-boxes"></i>
    Acessórios 
    - 
    <a href="{{ route('acessorio.create') }}" class="btn btn-dark">
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
            <th>Acessório</th>                        
            <th>Criado</th>
            <th>Atualizado</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($acessorios->get() as $acessorio)
            <tr>
                <td class="col-md-1">
                    <div class="d-flex ">
                        <a href="{{ route('acessorio.show', ['id'=>$acessorio->id_acessorio]) }}" class="btn btn-primary m-1">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('acessorio.edit', ['id'=>$acessorio->id_acessorio]) }}" class="btn btn-success m-1">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" 
                            data-bs-target="#modalExcluir"                           
                            data-bs-url="{!! route('acessorio.destroy', ['id' => $acessorio->id_acessorio]) !!}"
                            data-bs-identificacao="{{$acessorio->acessorio}}">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </td>
                <td>{{ $acessorio->id_acessorio}}</td>
                <td>{{ $acessorio->acessorio}}</td>                               
                <td>{{ $acessorio->created_at->format('d/m/Y')}}</td>
                <td>{{ $acessorio->updated_at->format('d/m/Y')}}</td>
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