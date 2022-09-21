@extends('layouts.base')
@section('conteudo')
<h1>
    <i class="bi bi-card-list"></i> 
    Modelos 
    - 
    <a href="{{ route('modelo.create') }}" class="btn btn-dark">
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
            <th>Modelo</th>
            <th>Ano(s)</th>
            <th>Marca</th>
            <th>Criado</th>
            <th>Atualizado</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($modelos->get() as $modelo)
            <tr>
                <td class="col-md-1">
                    <div class="d-flex ">
                        <a href="{{ route('modelo.show', ['id'=>$modelo->id_modelo]) }}" class="btn btn-primary m-1">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('modelo.edit', ['id'=>$modelo->id_modelo]) }}" class="btn btn-success m-1">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" 
                            data-bs-target="#modalExcluir"                           
                            data-bs-url="{!! route('modelo.destroy', ['id' => $modelo->id_modelo]) !!}"
                            data-bs-identificacao="{{$modelo->modelo}}">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </td>
                <td>{{ $modelo->id_modelo}}</td>
                <td>{{ $modelo->modelo}}</td>
                <td>{{ $modelo->anos_modelo}}</td>
                <td>{{ $modelo->marca->marca}}</td>
                <td>{{ $modelo->created_at->format('d/m/Y')}}</td>
                <td>{{ $modelo->updated_at->format('d/m/Y')}}</td>
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