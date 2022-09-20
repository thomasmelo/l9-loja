@if(Session::has('destroy'))
<div class="alert alert-warning alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    <strong>Sucesso!</strong> {{Session::get('destroy')}}
</div>
@endif

@if(Session::has('success'))
<div class="alert alert-success alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    <strong>Sucesso!</strong> {{Session::get('success')}}
</div>
@endif

@if(Session::has('danger'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    <strong>Sucesso!</strong> {{Session::get('danger')}}
</div>
@endif

@if(Session::has('error'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    <strong>Atenção!</strong>
    <p>
        @foreach(Session::get('error')->all() as $error)
        &bull; {{$error}} <br>
        @endforeach
    </p>
</div>
@endif

@if(Session::has('errors'))
<div class="alert alert-danger alert-dismissible" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    <strong>Atenção!</strong>
    <p>
        @foreach(Session::get('errors')->all() as $error)
        &bull; {{$error}} <br>
        @endforeach
    </p>
</div>
@endif