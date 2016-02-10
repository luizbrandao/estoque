<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;

use Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request){
      $credenciais = $request->only('email', 'password');

      if (Auth::attempt($credenciais)) {
        return "Credenciais válidas";
      }

      return "Credenciais não válidas";
    }
}
