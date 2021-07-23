@extends('templates.template')

@section('table')

    <h1 class="text-center">@if(isset($produto))Editar @else Cadastro @endif</h1>

    <div class="col-8 m-auto">


        @if(isset($errors) && count($errors) > 0)
            <div class="text-center mt-4 mb-4 p-2 alert-danger">
                @foreach($errors->all() as $erro)
                    {{$erro}}
                @endforeach
            </div>
        @endif

        @if(isset($produto))
                <form name="formEditarProduto" id="formEditarProduto" method="post" action="{{url("produtos/$produto->id")}}">
                    @method('PUT')
        @else
                <form name="formCadastroProduto" id="formCadastroProduto" method="post" action="{{url("produtos")}}">
        @endif

            @csrf
            <input class="form-control" type="text" name="codigo" id="codigo" placeholder="Codigo:" value="{{$produto->codigo ?? ''}}" required>
            <input class="form-control" type="text" name="nome"   id="nome"   placeholder="Nome:"  value="{{$produto->nome ?? ''}}"required>
            <input class="form-control" type="text" name="preco"  id="preco"  placeholder="Preco:"  value="{{$produto->precoUnitario ?? ''}}"required>
            <input class="btn btn-primary" type="submit" value="@if(isset($produto))Editar @else Cadastrar @endif">
        </form>
    </div>

@endsection
