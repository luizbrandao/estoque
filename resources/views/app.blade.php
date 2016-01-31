<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Controle de Estoque</title>
    <link rel="stylesheet" href="http://localhost:8082/estoque/public/css/bootstrap.css">
    <link rel="stylesheet" href="http://localhost:8082/estoque/public/css/bootstrap.css.map">
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="http://localhost:8082/estoque/public/produtos">Estoque Laravel</a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::guest())
              <li><a href="http://localhost:8082/estoque/public/auth/login">Login</a></li>
              <li><a href="http://localhost:8082/estoque/public/auth/register">Register</a></li>
            @else
              <li class="dropdown">
                <a class="dropdown-toggle" data-togle="dropdown" role="button" aria-expanded="false" href="#">{!!Auth::user()->name !!} <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="http://localhost:8082/estoque/public/auth/logout">Sair</a></li>
                </ul>
              </li>
            @endif
          </ul>
        </div>
      </nav>
      @yield('conteudo')
    </div>
  </body>
</html>
