<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prova</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>

    <dif id="app">
        @yield('table')
    </dif>

    <script src="{{asset('js/app.js')}}"></script>

    <script src="{{url("assets/bootstrap/js/deletarProduto.js")}}"></script>
    <script src="{{url("assets/bootstrap/js/deletarProduto.js")}}"></script>
</body>
</html>
