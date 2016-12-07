<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Controle de Estoque</title>
    <link rel="stylesheet" href="/public/css/bootstrap.css">
    <link rel="stylesheet" href="/public/css/bootstrap.css.map">
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="/public/produtos">Estoque Laravel</a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::guest())
              <li><a href="/public/auth/login">Login</a></li>
              <li><a href="/public/auth/register">Register</a></li>
            @else
              <li class="dropdown">
                <a class="dropdown-toggle" data-togle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">{!!Auth::user()->name !!} <span class="caret"></span></a>
                <ul class="dropdown-menu" aria-labelledby="dLabel" role="menu">
                  <li><a href="/public/auth/logout">Sair</a></li>
                </ul>
              </li>
            @endif
          </ul>
        </div>
      </nav>
      @yield('conteudo')
    </div>
    <script async src="/public/js/jquery.min.js" charset="utf-8"></script>
    <script async src="/public/js/bootstrap.min.js" charset="utf-8"></script>
  </body>
</html>
