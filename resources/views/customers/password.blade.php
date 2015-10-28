@extends('layouts.layout')

@section('title', 'Editar Álbum')

@section('content')
    <div class="row shadow-z-1" style="background-color: #fff">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            {!! Form::model($user, ['method' => 'PATCH', 'class' => 'form-horizontal', 'route' => ['account.password']]) !!}
                <fieldset style="text-align: center">
                    <legend>Alterar senha</legend>
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
                                {!! Form::text('name', null, ['class' => 'form-control', 'disabled']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4">
                                {!! Form::label('current_password', 'Senha Atual', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-lg-8 form-group-material-blue-grey">
                                {!! Form::password('current_password', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4">
                                {!! Form::label('password', 'Nova Senha', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-lg-8 form-group-material-blue-grey">
                                {!! Form::password('password', ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4">
                                {!! Form::label('password_confirmation', 'Confirmar Nova Senha', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-lg-8 form-group-material-blue-grey">
                                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
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