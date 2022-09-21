@extends('layouts.base')
@section('conteudo')

<h1>
    <i class="bi bi-card-list"></i>

    @if ($modelo)
         Atualizar
    @else
        Novo Cadastro
    @endif
        
</h1>
{{-- FORMULARIO --}}
@if ($modelo)
    <form action="{{ route('modelo.update', ['id'=>$modelo->id_modelo]) }}" method="POST" class="row" >    
@else
    <form action="{{ route('modelo.store') }}" method="POST" class="row" >    
@endif
    {{-- TOKEN --}}
    @csrf
    <div class="col-md-4">
        <label for="id_marca" class="form-label">Marca*</label>
        <select class="form-control" name="id_marca" id="id_marca" required>
            <option value="">Selecione a Marca</option>
            @foreach ($marcas as $marca)
            <option value="{!! $marca->id_marca; !!}" 
                @if(($modelo !=null && $modelo->id_marca ==$marca->id_marca) or (old('id_marca') == $marca->id_marca))
                selected="selected"
                @endif
                >{!! $marca->marca !!}</option>
            @endforeach
        </select>        
    </div> 
    <div class="col-md-4">
        <label for="modelo" class="form-label">Modelo*</label>
        <input type="text" class="form-control" id="modelo" name="modelo" required
        value="{{ $modelo ? $modelo->modelo : old('modelo') }}">
    </div>
    <div class="col-md-4">
        <label for="anos_modelo" class="form-label">Anos do Modelo*</label>
        <input type="text" class="form-control" id="anos_modelo" name="anos_modelo" required
            value="{{ $modelo ? $modelo->anos_modelo : old('anos_modelo') }}" placeholder="Ex.: 2020, 2021, 2022">
    </div>

    <div class="col-md-12">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ $modelo ? $modelo->descricao : old('descricao') }}</textarea>        
    </div>
    <div class="col-2">
        <label for="btnAcao" class="form-label">&nbsp;</label>
        <input type="submit" value="{{ $modelo ? 'Atualizar': 'Cadastrar'}}" id="btnAcao" class="btn btn-primary form-control">
    </div>
</form>
{{-- /FORMULARIO --}}
@endsection

@section('scripts')
@parent
@endsection