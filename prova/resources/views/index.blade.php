@extends('templates.template')



@section('table')
    <div class="flex">
        <!-- Logo -->
        <div class="flex-shrink-0 flex items-center">
            <a href="{{ route('dashboard') }}">
                <x-jet-application-mark class="block h-9 w-auto" />
            </a>
        </div>

        <!-- Navigation Links -->
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-jet-nav-link>
        </div>

        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-jet-nav-link href="{{ url('pessoas') }}" :active="request()->routeIs('pessoas')">
                {{ __('Pessoas') }}
            </x-jet-nav-link>
        </div>

        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-jet-nav-link href="{{ url('produtos') }}" :active="request()->routeIs('produtos')">
                {{ __('Produtos') }}
            </x-jet-nav-link>
        </div>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>


    </div>

    <hr><br>


    <div>
        <a href="{{url('pessoas/create')}}">
            <input  class="btn btn-primary" type="button" value="Cadastro" style="float: left;">
        </a>
    </div>

        @csrf
        <table class="table text-center">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Cpf</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Action</th>

            </tr>
            </thead>
            <tbody>

            @foreach($pessoa as $pessoas)


                <tr>
                    <td>{{$pessoas->id}}</td>
                    <td>{{$pessoas->nome}}</td>
                    <td>{{$pessoas->cpf}}</td>
                    <td>{{$pessoas->dataNascimento}}</td>
                    <td>
                        <a href="{{url("pessoas/$pessoas->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("pessoas/$pessoas->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="" class="excluirPessoa">
                            <button class="btn btn-danger">
                                Excluir
                            </button>
                        </a>
                    </td>
                </tr>

            @endforeach

            </tbody>
        </table>
    </div>



@endsection

