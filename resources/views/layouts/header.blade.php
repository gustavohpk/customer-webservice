<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
        	<div class="navbar navbar-material-blue-grey">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ route('home.index') }}">Aplicação 3</a>
                </div>
                <div class="navbar-collapse collapse navbar-inverse-collapse">
                    <ul class="nav navbar-nav">
                        <li {{ Request::is('admin/customers*') ? ' class=active' : null }}><a href="{{ route('customers.index') }}">Clientes</a></li>
                        <li {{ Request::is('admin/users*') ? ' class=active' : null }}><a href="{{ route('users.index') }}">Usuários</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li {{ Request::is('admin/account/password') ? ' class=active' : null }}><a href="{{ route('account.password') }}">Alterar Senha</a></li>
                        <li><a href="{{ route('logout') }}">Sair</a></li>
                    </ul>
                </div>
        	</div>
        </div>
    </div>
</div>