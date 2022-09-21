@extends('layouts.base')
@section('conteudo')

<h1>
    <i class="bi bi-card-list"></i>
   Cod.: {{ $modelo->id_modelo }} - Modelo : {{ $modelo->modelo }} - {{ $modelo->marca->marca}} - {{ $modelo->anos_modelo}}
</h1>
<p>{!! nl2br($modelo->descricao) !!}</p>

<h2> 
    <i class="bi bi-boxes"></i>
    Relação de Acessórios
</h2>
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
        @foreach ($modelo->acessorios()->get() as $acessorio)
        <tr>
            <td class="col-md-1">
                <div class="d-flex ">
                    <a href="{{ route('acessorio.show', ['id'=>$acessorio->id_acessorio]) }}" class="btn btn-primary m-1">
                        <i class="bi bi-eye-fill"></i>
                    </a>                    
                </div>
            </td>
            <td>{{ $acessorio->id_acessorio}}</td>
            <td>{{ $acessorio->acessorio->acessorio}}</td>
            <td>{{ $acessorio->created_at->format('d/m/Y')}}</td>
            <td>{{ $acessorio->updated_at->format('d/m/Y')}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

{{-- ALERTAS --}}
@include('layouts.alerts')

@endsection

@section('scripts')
@parent
@endsection