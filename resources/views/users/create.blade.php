@extends('layouts.layout')

@section('title', 'Novo Álbum')

@section('content')
    <div class="row shadow-z-1" style="background-color: #fff">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            {!! Form::open(['route' => 'users.store', 'class' => 'form-horizontal']) !!}
                <fieldset style="text-align: center">
                    <legend>Novo usuário</legend>
                    <div class="form-group">
                        <div class="col-lg-4">
                            {!! Form::label('username', 'Usuário', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-lg-8 form-group-material-blue-grey">
                            {!! Form::text('username', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-4">
                            {!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-lg-8 form-group-material-blue-grey">
                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-4">
                            {!! Form::label('password', 'Senha', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-lg-8 form-group-material-blue-grey">
                            {!! Form::password('password', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-4">
                            {!! Form::label('password_confirmation', 'Confirmar Senha', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-lg-8 form-group-material-blue-grey">
                            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-4">
                            {!! Form::label('admin', 'Administrador Geral', ['class' => 'control-label']) !!}
                        </div>
                        <div class="col-lg-8 form-group-material-blue-grey">
                            <div class="checkbox checkbox-material-blue-grey">
                                <label>
                                        {!! Form::checkbox('admin', null, false, ['class' => 'form-control']) !!}
                                        <span class="checkbox-material">
                                            <span class="check"></span>
                                        </span>
                                </label>
                            </div>
                            <small class="pull-left">Administradores gerais podem criar ou excluir outros usuários.</small>
                        </div>
                    </div>
                    {!! Form::submit('Salvar', ['class' => 'btn btn-success']) !!}
                    <a href="{{ route('users.index') }}" class="btn btn-warning">Retornar</a>
                </fieldset>
            {!! Form::close() !!}

        </div>
    </div>
@endsection