@extends('layouts.base')
@section('conteudo')

<h1>
    <i class="bi bi-shield-fill"></i>

    @if ($marca)
         Atualizar
    @else
        Novo Cadastro
    @endif
        
</h1>
{{-- FORMULARIO --}}
@if ($marca)
    <form action="{{ route('marca.update', ['id'=>$marca->id_marca]) }}" method="POST" class="row" >    
@else
    <form action="{{ route('marca.store') }}" method="POST" class="row" >    
@endif
    {{-- TOKEN --}}
    @csrf 
    <div class="col-md-6">
        <label for="marca" class="form-label">Marca*</label>
        <input type="text" class="form-control" id="marca" name="marca" required
        value="{{ $marca ? $marca->marca : old('marca') }}">
    </div>
    <div class="col-2">
        <label for="btnAcao" class="form-label">&nbsp;</label>
        <input type="submit" value="{{ $marca ? 'Atualizar': 'Cadastrar'}}" id="btnAcao" class="btn btn-primary form-control">
    </div>
</form>
{{-- /FORMULARIO --}}
@endsection

@section('scripts')
@parent
@endsection