<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <main class="py-4">
        <div class="container">
            <div class="card">
                <div class="card-header">Cadastro de Visitante</div>
                <div class="card-body">
                    <form method="post" action="">
                        <div class="form-group row">
                            <div class="col-md-4 text-right">Nome:</div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="nome" maxlength="255">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 text-right">E-mail:</div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="e-mail" maxlength="60">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 text-right">Data de Nascimento:</div>
                            <div class="col-md-4">
                                <input class="form-control" type="date" name="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 text-right">Telefone:</div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="telefone" maxlength="13">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-4 text-right">Celular:</div>
                            <div class="col-md-4">
                                <input class="form-control" type="text" name="celular" maxlength="14">
                            </div>
                        </div>
                        <div class="row align-items-md-center">
                            <div class="col-md-4 ml-auto mr-auto">
                                <button class="btn btn-primary" type="submit">Enviar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
</body>
</html>
