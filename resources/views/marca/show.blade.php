@extends('layouts.base')
@section('conteudo')

<h1>
    <i class="bi bi-shield-fill"></i>
    Marca : {{ $marca->marca }}
</h1>

<h2> 
    <i class="bi bi-card-list"></i>
    Relação de Modelos 
</h2>
<table class="table table-striped table-responsive table-striped table-hover">
    <thead>
        <tr>
            <th>Ações</th>
            <th>Cód.:</th>
            <th>Modelo</th>
            <th>Criado</th>
            <th>Atualizado</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($marca->modelos()->get() as $modelo)
        <tr>
            <td class="col-md-1">
                <div class="d-flex ">
                    <a href="{{ route('modelo.show', ['id'=>$modelo->id_modelo]) }}" class="btn btn-primary m-1">
                        <i class="bi bi-eye-fill"></i>
                    </a>                    
                </div>
            </td>
            <td>{{ $modelo->id_modelo}}</td>
            <td>{{ $modelo->modelo}}</td>
            <td>{{ $modelo->created_at->format('d/m/Y')}}</td>
            <td>{{ $modelo->updated_at->format('d/m/Y')}}</td>
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