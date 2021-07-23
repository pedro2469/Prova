@extends('templates.template')

@section('table')

    <h1 class="text-center">Busca</h1>

    <div class="col-8 m-auto">

        <form name="formBuscarProduto" id="formBuscarProduto" method="post" action="{{url("produtos")}}">

            @csrf
            <input class="form-control" type="text" name="codigo" id="codigo" placeholder="Codigo:">
            <input class="form-control" type="text" name="nome"   id="nome"   placeholder="Nome:">
            <input class="form-control" type="text" name="preco"  id="preco"  placeholder="Preco:">
            <input class="btn btn-primary" type="submit" value="Search">
            
        </form>
    </div>

@endsection
