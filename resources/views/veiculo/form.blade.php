@extends('layouts.base')
@section('conteudo')

<h1>
    <i class="bi bi-car-front-fill"></i>

    @if ($veiculo)
         Atualizar
    @else
        Novo Cadastro
    @endif
        
</h1>
{{-- FORMULARIO --}}
@if ($veiculo)
    <form action="{{ route('veiculo.update', ['id'=>$veiculo->id_veiculo]) }}" method="POST"  class="row" enctype="multipart/form-data" >    
@else
    <form action="{{ route('veiculo.store') }}" method="POST" class="row" enctype="multipart/form-data" >    
@endif
    {{-- TOKEN --}}
    @csrf    
    <div class="col-md-3">
        <label for="placa" class="form-label">Placa*</label>
        <input type="text" class="form-control" id="placa" name="placa" required
        value="{{ $veiculo ? $veiculo->placa : old('placa') }}">
    </div>
    <div class="col-md-3">
        <label for="cor" class="form-label">cor*</label>
        <input type="text" class="form-control" id="cor" name="cor" required
            value="{{ $veiculo ? $veiculo->cor : old('cor') }}">
    </div>
    <div class="col-md-3">
        <label for="valor" class="form-label">valor*</label>
        <input type="number" class="form-control" id="valor" name="valor" required
         min="0" value="{{ $veiculo ? $veiculo->valor : old('valor') }}">
    </div>
    <div class="col-md-3">
        <label for="id_modelo" class="form-label">Modelo*</label>
        <select class="form-control" name="id_modelo" id="id_modelo" required>
            <option value="">Selecione o modelo</option>
            @foreach ($modelos as $modelo)
            <option value="{!! $modelo->id_modelo; !!}" @if(($veiculo !=null && $veiculo->id_modelo ==$modelo->id_modelo) or
                (old('id_modelo') == $modelo->id_modelo))
                selected="selected"
                @endif
                >{!! $modelo->modelo !!}</option>
            @endforeach
        </select>
    </div>
    <div class="col-md-12">
        <label for="foto" class="form-label">Foto</label>
       <input type="file" class="form-control" name="foto" id="foto">
    </div>
    <div class="col-md-12">
        <label for="descricao" class="form-label">Descrição</label>
        <textarea class="form-control" id="descricao" name="descricao" rows="3">{{ $veiculo ? $veiculo->descricao : old('descricao') }}</textarea>        
    </div>    

    <div class="col-2">
        <label for="btnAcao" class="form-label">&nbsp;</label>
        <input type="submit" value="{{ $veiculo ? 'Atualizar': 'Cadastrar'}}" id="btnAcao" class="btn btn-primary form-control">
    </div>
</form>
{{-- /FORMULARIO --}}
@endsection

@section('scripts')
@parent
@endsection