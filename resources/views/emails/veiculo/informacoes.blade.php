@extends('layouts.baseEmail')
@section('conteudo')

<h1>
    <i class="bi bi-car-front-fill"></i>
    Cod.: {{ $veiculo->id_veiculo }} - Veículo : {{ $veiculo->modelo->modelo }} / {{ $veiculo->modelo->marca->marca }}
</h1>
<h2>
    Placa : {{ $veiculo->placa }} - Cor: {{ $veiculo->cor }} - Valor R$: {{ $veiculo->valor }}
</h2>
<p>{!! nl2br($veiculo->descricao) !!}</p>

<h2>
    <i class="bi bi-boxes"></i>
    Acessórios
</h2>
<ol>
    @foreach ($veiculo->modelo->acessorios->acessorio()->get() as $acessorio)
    <li> {{$acessorio->acessorio }}</li>
    @endforeach
</ol>


@endsection
