@extends('app')

@section('conteudo')

<div class="col-md-12">
  <h1>Registro</h1>
  <form method="post" action="/estoque/public/auth/register">
      {!! csrf_field() !!}
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group">
          <label for="name">Name</label>
          <input class="form-control" type="text" name="name" value="{{ old('name') }}">
      </div>
      <div class="form-group">
          <label for="email">Email</label>
          <input class="form-control" type="email" name="email" value="{{ old('email') }}">
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input class="form-control" type="password" name="password">
      </div>
      <div class="form-group">
          <label for="password_confirmation">Confirm Password</label>
          <input class="form-control" type="password" name="password_confirmation">
      </div>
      <div class="form-group">
          <button class="btn btn-lg btn-success" type="submit">Register</button>
      </div>
  </form>
</div>
@stop
