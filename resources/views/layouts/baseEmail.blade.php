<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"
            defer>
        </script>
        <style>
            footer {
                /* width: 75%;
                position: fixed;
                bottom: 0; */
            }
        </style>
    </head>

<body>
    <div class="container">        
        {{-- CONTEÚDO --}}
        <div class="row mt-2 mb-4">
            @yield('conteudo')
        </div>
        {{-- CONTEÚDO --}}
        {{-- RODAPÉ --}}
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <div class="col-md-12 d-flex align-items-center">
                <span class="mb-3 mb-md-0 text-muted">© Todos os direitos reservados {{ date('Y') }}</span>
                &nbsp;
                <a href="https://thomasmelo.com.br" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                    - Thomas Melo
                </a>
            </div>
        </footer>
        {{-- RODAPÉ --}}
    </div>


</body>
@yield('scripts')
{{-- TOOLTIP --}}

</html>