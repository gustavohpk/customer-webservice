@extends('layouts.layout')

@section('title', 'Visualizar Usuário')

@section('content')
    <div class="row shadow-z-1" style="background-color: #fff">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">


            <h2>Nome: {{ $user->name }}</h2>
            <p>Usuário: {{ $user->username }}</p>
            <p>Id: {{ $user->id }}</p>
            <p>Administrador Geral: <i class="material-icons md-18">{{{ $user->admin == true ? 'check_circle' : 'cancel' }}}</i></p>
            <hr>

            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('users.index') }}" class="btn btn-warning">Retornar</a>
            {!! Form::open([
                'method' => 'DELETE',
                'route' => ['users.destroy', $user->id]
            ]) !!}
                {!! Form::submit('Excluir', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop