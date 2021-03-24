<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{

  public function index()
  {

    return view('login.index');

  }

  public function entrar(Request $req)
  {

    $dados = $req->all();

    //metodo para validar, tem na documentacao
    if(Auth::attempt(['email'=>$dados['email'], 'password'=>$dados['senha']]))
    {
        return redirect()->route('admin.cursos');
    }

    //vai redirecionar quando nao funcionar o login
    return redirect()->route('site.home');

  }

  public function sair()
  {

    Auth::logout();
    return redirect()->route('site.home');

  }

}
