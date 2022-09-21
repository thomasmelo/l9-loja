@extends('layouts.base')
@section('conteudo')

<h1>
    <i class="bi bi-boxes"></i>

    @if ($acessorio)
         Atualizar
    @else
        Novo Cadastro
    @endif
        
</h1>
{{-- FORMULARIO --}}
@if ($acessorio)
    <form action="{{ route('acessorio.update', ['id'=>$acessorio->id_acessorio]) }}" method="POST" class="row" >    
@else
    <form action="{{ route('acessorio.store') }}" method="POST" class="row" >    
@endif
    {{-- TOKEN --}}
    @csrf    
    <div class="col-md-12">
        <label for="acessorio" class="form-label">Acessório*</label>
        <input type="text" class="form-control" id="acessorio" name="acessorio" required
        value="{{ $acessorio ? $acessorio->acessorio : old('acessorio') }}">
    </div>
    <div class="col-md-12">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ $acessorio ? $acessorio->descricao : old('descricao') }}</textarea>        
    </div>

    <div class="col-md-12">
        <label for="modelos" class="form-label">Relação de Modelos</label>
        @foreach ($modelos as $modelo)
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="modelos[{{ $modelo->id_modelo }}]"
                name="modelos[{{ $modelo->id_modelo }}]" value="{{ $modelo->id_modelo }}"
                 {!! 
                   ( $acessorio != null) && ($acessorio->modelos()->where('id_modelo', $modelo->id_modelo)->count() > 0)                 
                    ? 'checked' : '' 
                 !!} >
            <label class="form-check-label" for="modelos[{{ $modelo->id_modelo }}]">{{ $modelo->modelo }}</label>
        </div>
        @endforeach        
    </div>

    <div class="col-2">
        <label for="btnAcao" class="form-label">&nbsp;</label>
        <input type="submit" value="{{ $acessorio ? 'Atualizar': 'Cadastrar'}}" id="btnAcao" class="btn btn-primary form-control">
    </div>
</form>
{{-- /FORMULARIO --}}
@endsection

@section('scripts')
@parent
@endsection