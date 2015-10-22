<html>
    <head>
        <title>Aplicação 3 - Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css">

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    </head>
    <body id="admin">
        <header style="height: 100px; padding: 10px">
            <div class="col-xs-8 col-xs-offset-2 col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-5">
                <img id="logo" src="{{asset('assets/images/logo.png')}}" alt="" style="max-width: 100%; text-align: center">
            </div>
        </header>

        <main class="container">

            @include('layouts.errors')

            @include('layouts.flash-messages')


            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
                    <div class="panel panel-material-blue-grey">
                        <div class="panel-heading">Login - Aplicação 03</div>
                        <div class="panel-body">
                            <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Usuário</label>
                                    <div class="col-md-6 form-group-material-blue-grey">
                                        {!! Form::text('username', null, ['class' => 'form-control', 'type' => 'username']) !!}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-4 control-label">Senha</label>
                                    <div class="col-md-6 form-group-material-blue-grey">
                                        {!! Form::password('password', ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                               <!--  <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> {{ trans('validation.attributes.remember') }}
                                        </label>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-material-blue-grey" style="margin-right: 15px;">Login</button>
                                        <!-- <a href="/forgot">{{ trans('validation.attributes.forgotpassword') }}</a> -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <footer>
            @include('layouts.footer')
        </footer>
    </body>
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


</html>