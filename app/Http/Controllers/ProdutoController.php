<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;
use estoque\Http\Requests\ProdutosRequest;

use estoque\Produto;
use Validator;

class ProdutoController extends Controller
{
    public function __construct(){
      //$this->middleware('nosso-middleware');
      $this->middleware('auth', ['only' => ['adiciona', 'novo', 'remove','atualizar' ,'update']]);
    }

    public function update(Request $request)
    {
      $produto = Produto::find($request->input('id'));
      $produto->nome = $request->input('nome');
      $produto->descricao = $request->input('descricao');
      $produto->valor = $request->input('valor');
      $produto->quantidade = $request->input('quantidade');
      $produto->save();

      return redirect()->action('ProdutoController@lista')->withInput($request->only('nome'));
    }

    public function lista(){
      $produtos = Produto::all();

      return view('produto.listagem')->with('produtos', $produtos);
    }

    public function listaJson(){
      $produtos = Produto::all();

      return response()->json($produtos);
    }

    // parametro $request passado por injecao de dependencia
    public function mostra(Request $request){
      $p = $this->buscaProdutoId($request);

      return view('produto.detalhes')->with('p', $p);
    }

    public function buscaProdutoId(Request $request){
      $id = $request->route('id');

      $p = Produto::find($id);

      if (empty($p)) {
        return 'Esse produto não existe!';
      }

      return $p;
    }

    public function mostraProdutoJson(Request $request){
      $p = $this->buscaProdutoId($request);

      return response()->json($p);
    }

    public function novo(){
      return view('produto.formulario');
    }

    public function atualizar($id){
      $p = Produto::find($id);
      return view('produto.atualizar')->with('p',$p);
    }

    public function adiciona(ProdutosRequest $request){
      $validator = Validator::make(
        ['nome' => $request->input('nome')],
        ['nome' => 'required|min:5']
      );

      if ($validator->fails()) {
        return redirect()->action('ProdutoController@novo');
      }

      Produto::create($request->all());

      return redirect()->action('ProdutoController@lista')->withInput($request->only('nome'));
    }

    public function remove($id){
      $produto = Produto::find($id);

      $produto->delete();
      return redirect()->action('ProdutoController@lista');
    }

    public function buscar($nome){

      $produto = Produto::where('nome','=',$nome)->get();

      return response()->json($produto);
    }
}
