@extends('layout.principal')

@section('conteudo')
<h1>Atualizando Produto</h1>
<form class="form" action="/estoque/public/produtos/update" method="post">
  <input type="hidden" name="_token" value="{!! csrf_token() !!}">
  <input type="hidden" name="id" value="{!! $p->id !!}">
  <div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" class="form-control" value="{!! $p->nome !!}">
  </div>
  <div class="form-group">
    <label for="descricao">Descrição:</label>
    <input type="text" name="descricao" class="form-control" value="{!! $p->descricao !!}">
  </div>
  <div class="form-group">
    <label for="valor">Valor:</label>
    <input type="text" name="valor" class="form-control" value="{!! $p->valor !!}">
  </div>
  <div class="form-group">
    <label for="quantidade">Quantidade</label>
    <input type="number" name="quantidade" class="form-control" value="{!! $p->quantidade !!}">
  </div>
  <div class="form-group">
    <button class="btn btn-success" type="submit" name="botao">Salvar</button>
  </div>
</form>
@stop
