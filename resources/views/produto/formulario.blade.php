@extends('layout.principal')

@section('conteudo')

<h1>Novo Produto</h1>

@if(!empty($errors->all()))
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
      <li>{!! $error !!}</li>
    @endforeach
  </ul>
</div>
@endif

<form class="form" action="http://localhost:8082/estoque/public/produtos/adiciona" method="post">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" class="form-control" value="{!! old('nome') !!}">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição:</label>
    <input type="text" name="descricao" class="form-control" value="{!! old('descricao') !!}">
  </div>
  <div class="form-group">
    <label for="valor">Valor:</label>
    <input type="text" name="valor" class="form-control" value="{!! old('valor') !!}">
  </div>
  <div class="form-group">
    <label for="quantidade">Quantidade</label>
    <input type="number" name="quantidade" class="form-control" value="{!! old('quantidade') !!}">
  </div>
  <div class="form-group">
    <button class="btn btn-success" type="submit" name="botao">Salvar</button>
  </div>
</form>
@stop
