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
                        Lista de Usuários
                    </h3>
                </div>
                <div class="panel-body">
                    <table class="table data-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Título</th>
                                <th>Admin Geral</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td><i class="material-icons md-18">{{{ $user->admin == true ? 'check_circle' : 'cancel' }}}</i></td>
                                    <td class="actions">
                                    <a href="{{ route('users.show', $user->id) }}" role="button" class="btn btn-default btn-xs">
                                            <i class="material-icons md-18">visibility</i>
                                        </a>
                                        <a href="{{ route('users.edit', $user->id) }}" role="button" class="btn btn-primary btn-xs">
                                            <i class="material-icons md-18">edit</i>
                                        </a>
                                        {!! Form::open([
                                            'method' => 'DELETE',
                                            'route' => ['users.destroy', $user->id]
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
                    <a href="{{ route('users.create') }}" role="button" class="btn btn-success btn-xs">
                        <i class="material-icons md-18">add</i>
                    </a>
                    {!! $users->render() !!}
                </div>
            </div>
        </div>


@endsection