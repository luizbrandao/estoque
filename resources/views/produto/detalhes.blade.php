@extends('layout.principal')

@section('conteudo')
<h1> Detalhes do Produto: {!! $p->nome !!}</h1>

<ul>
  <li><b>Valor:</b> R$ {!! $p->valor !!} </li>
  <li><b>Descrição:</b> R$ {!! $p->descricao !!}</li>
  <li><b>Quantidade:</b> R$ {!! $p->quantidade !!}</li>
</ul>

<a href="http://localhost:8082/estoque/public/produtos/atualizar/{!! $p->id !!}" class="btn btn-primary">Atualizar</a>
@stop
