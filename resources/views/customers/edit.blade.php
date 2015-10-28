@extends('layouts.layout')

@section('title', 'Editar Álbum')

@section('content')
    <div class="row shadow-z-1" style="background-color: #fff">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            {!! Form::model($user, ['method' => 'PATCH', 'class' => 'form-horizontal', 'route' => ['users.update', $user->id]]) !!}
                <fieldset style="text-align: center">
                    <legend>Editar usuário</legend>
                    <div class="form-group">
                        <div class="form-group">
                            <div class="col-lg-4">
                                {!! Form::label('username', 'Usuário', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-lg-8 form-group-material-blue-grey">
                                {!! Form::text('username', $user->username, ['class' => 'form-control', 'disabled']) !!}
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
                                <b>Senha</b>
                            </div>
                            <div class="col-lg-8 form-group-material-blue-grey">
                                <span class="pull-left">A senha só pode ser alterada pelo próprio usuário.</span>
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
                    </div>
                    {!! Form::submit('Salvar alterações', ['class' => 'btn btn-success']) !!}
                    <a href="{{ route('users.index') }}" class="btn btn-warning">Retornar</a>
                </fieldset>
            {!! Form::close() !!}

        </div>
    </div>
@endsection