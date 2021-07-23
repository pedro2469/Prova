@extends('templates.template')

@section('table')

    <h1>@if(isset($pessoa))Editar @else Cadastro @endif</h1>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors)>0)

            <div class="alert alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}
                @endforeach
            </div>

        @endif

        @if(isset($pessoa))

                <form name="formEditarPessoa" id="formEditarPessoa" method="post" action="{{url("pessoas/$pessoa->id")}}">
                @method('PUT')
            @else

                <form name="formCadastroPessoa" id="formCadastoPessoa" method="post" action="{{url("pessoas")}}">

        @endif

            @csrf
            <input class="form-control" type="text" name="nome" id="nome" placeholder="Nome:" value="{{$pessoa->nome ?? ''}}"required>
            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="Cpf:  (XXX.XXX.XXX-XX)" value="{{$pessoa->cpf ?? ''}}" required>
            <input class="form-control" type="text" name="dataNascimento" id="dataNascimento" placeholder="dataNascimento: YYYY-MM-DD" value="{{$pessoa->dataNascimento ?? ''}}" required>

            <input class="btn btn-primary" type="submit" value="@if(isset($pessoa))Editar @else Cadastrar @endif">

        </form>
    </div>



@endsection

