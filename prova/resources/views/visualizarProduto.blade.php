@extends('templates.template')

@section('table')

    <h1 class="text-center">Visualizar</h1>

    <div class="col-8 m-auto">

        ID: {{$produto->id}}<br>
        Codigo: {{$produto->codigo}}<br>
        Nome: {{$produto->nome}}<br>
        Preco: {{$produto->preco}}<br>

    </div>


@endsection

