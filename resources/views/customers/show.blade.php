@extends('layouts.layout')

@section('title', 'Visualizar Usuário')

@section('content')
    <div class="row shadow-z-1" style="background-color: #fff">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">


            <h2>Nome: {{ $customer->name }}</h2>
            <p>Id: {{ $customer->id }}</p>
            <p>CPF: {{ $customer->cpf }}</p>
            <p>RG: {{ $customer->rg }}</p>
            <p>Telefone 1: {{ $customer->phone1 }}</p>
            <p>Telefone 2: {{ $customer->phone2 }}</p>
            <p>Endereço: {{ $customer->address }}</p>
            <p>Data de Nascimento: {{ $customer->date_of_birth }}</p>
            <p>Administrador Geral: <i class="material-icons md-18">{{{ $customer->admin == true ? 'check_circle' : 'cancel' }}}</i></p>
            <hr>

            <a href="{{ route('users.edit', $customer->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('users.index') }}" class="btn btn-warning">Retornar</a>
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['users.destroy', $customer->id]
            ]) !!}
                {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop