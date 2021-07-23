@extends('templates.template')

@section('table')

    <h1 class="text-center">Visualizar</h1>

    <div class="col-8 m-auto">


        ID: {{$pessoa->id}}<br>
        Nome: {{$pessoa->nome}}<br>
        Cpf: {{$pessoa->cpf}}<br>
        Data de Nascimento: {{$pessoa->dataNascimento}}<br>

    </div>


@endsection

