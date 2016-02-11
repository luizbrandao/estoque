@extends('app')

@section('conteudo')
<div class="col-md-4">
  <h1>Login</h1>
  <form method="POST" action="/estoque/public/auth/login">
      {!! csrf_field() !!}
      <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" value="{{ old('email') }}">
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password">
      </div>
      <div class="form-group">
          <label for="remember">Remember Me</label>
          <input type="checkbox" name="remember">
      </div>
      <div class="form-group">
          <button type="submit" class="btn btn-lg btn-success">Login</button>
      </div>
  </form>
</div>
@stop
