@extends('layouts.layout')

@section('title', 'Lista de Usuários')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')

        <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
            <div class="panel panel-material-blue-grey">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        Lista de Clientes
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>CPF</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer)
                                <tr>
                                    <td>{{ $customer->id }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->cpf }}</i></td>
                                    <td class="actions">
                                    <a href="{{ route('customers.show', $customer->id) }}" role="button" class="btn btn-default btn-xs">
                                            <i class="material-icons md-18">visibility</i>
                                        </a>
                                        <a href="{{ route('customers.edit', $customer->id) }}" role="button" class="btn btn-primary btn-xs">
                                            <i class="material-icons md-18">edit</i>
                                        </a>
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'route' => ['customers.destroy', $customer->id]
                                        ]) !!}
                                            <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm('Você realmente deseja excluir?')">
                                                <i class="material-icons md-18">delete</i>
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="{{ route('customers.create') }}" role="button" class="btn btn-success btn-xs">
                        <i class="material-icons md-18">add</i>
                    </a>
                    {!! $customers->render() !!}
                </div>
            </div>
        </div>


@endsection