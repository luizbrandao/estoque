@extends('layout.principal')

@section('conteudo')
<h1>Listagem de Produtos</h1>
@if(old('nome'))
<div class="alert alert-success"role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Sucesso!</strong> O produto {!! old('nome') !!} foi adicionado com sucesso!
</div>
@endif
<table class="table table-responsive table-stripped table-hover">
  @if(empty($produtos))
    <div class="alert alert-danger" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <p>
        Você não tem produtos cadastrados
      </p>
    </div>
  @else
    <thead>
      <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Quantidade</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($produtos as $p)
        <tr class="{!! $p->quantidade <=5 ? 'danger': '' !!} ">
          <td>{!! $p->nome !!}</td>
          <td>{!! $p->valor !!}</td>
          <td>{!! $p->descricao !!}</td>
          <td>{!! $p->quantidade !!}</td>
          <td>
            <a href="/public/produtos/mostra/<?= $p->id ?>" class="btn btn-primary">
              <span class="glyphicon glyphicon-search"></span>&nbsp;Visualizar
            </a>
          </td>
          <td>
            <a href="/public/produtos/remove/<?= $p->id ?>" class="btn btn-danger">
              <span class="glyphicon glyphicon-trash" ></span>&nbsp; Remover
            </a>
          </td>
        </tr>
      @endforeach
    </tbody>
  @endif
</table>
<h4>
  <span class="label label-danger pull-right">
    Cinco ou menos itens no estoque!
  </span>
</h4>
<p>
</p>
@stop
