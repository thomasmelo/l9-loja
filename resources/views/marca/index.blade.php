@extends('layouts.base')
@section('conteudo')
<h1>
    <i class="bi bi-shield-fill"></i> 
    Marcas 
    - 
    <a href="{{ route('marca.create') }}" class="btn btn-dark">
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
            <th>Marca</th>
            <th>Criado</th>
            <th>Atualizado</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($marcas->get() as $marca)
            <tr>
                <td class="col-md-1">
                    <div class="d-flex ">
                        <a href="{{ route('marca.show', ['id'=>$marca->id_marca]) }}" class="btn btn-primary m-1">
                            <i class="bi bi-eye-fill"></i>
                        </a>
                        <a href="{{ route('marca.edit', ['id'=>$marca->id_marca]) }}" class="btn btn-success m-1">
                            <i class="bi bi-pencil-fill"></i>
                        </a>
                        <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" 
                            data-bs-target="#modalExcluir"                           
                            data-bs-url="{!! route('marca.destroy', ['id' => $marca->id_marca]) !!}"
                            data-bs-identificacao="{{$marca->marca}}">
                            <i class="bi bi-trash"></i>
                        </button>
                    </div>
                </td>
                <td>{{ $marca->id_marca}}</td>
                <td>{{ $marca->marca}}</td>
                <td>{{ $marca->created_at->format('d/m/Y')}}</td>
                <td>{{ $marca->updated_at->format('d/m/Y')}}</td>
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