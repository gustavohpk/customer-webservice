@extends('layouts.layout')

@section('title', 'Editar Álbum')

@section('content')
    <div class="row shadow-z-1" style="background-color: #fff">
        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            {!! Form::model($customer, ['method' => 'PATCH', 'class' => 'form-horizontal', 'route' => ['customers.update', $customer->id]]) !!}
                <fieldset style="text-align: center">
                    <legend>Editar usuário</legend>
                    <div class="form-group">
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
                                {!! Form::label('cpf', 'CPF', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-lg-8 form-group-material-blue-grey">
                                {!! Form::text('cpf', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4">
                                {!! Form::label('rg', 'RG', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-lg-8 form-group-material-blue-grey">
                                {!! Form::text('rg', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4">
                                {!! Form::label('phone1', 'Telefone 1', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-lg-8 form-group-material-blue-grey">
                                {!! Form::text('phone1', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4">
                                {!! Form::label('phone2', 'Telefone 2', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-lg-8 form-group-material-blue-grey">
                                {!! Form::text('phone2', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4">
                                {!! Form::label('address', 'Endereço', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-lg-8 form-group-material-blue-grey">
                                {!! Form::text('address', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-4">
                                {!! Form::label('date', 'Data de Nascimento', ['class' => 'control-label']) !!}
                            </div>
                            <div class="col-lg-8 form-group-material-blue-grey">
                                {!! Form::text('date', null, ['class' => 'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    {!! Form::submit('Salvar alterações', ['class' => 'btn btn-success']) !!}
                    <a href="{{ route('customers.index') }}" class="btn btn-warning">Retornar</a>
                </fieldset>
            {!! Form::close() !!}

        </div>
    </div>
@endsection