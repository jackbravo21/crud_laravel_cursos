<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Curso;

class CursoController extends Controller
{

    public function index()
    {
      $registros = Curso::all();
      return view('admin.cursos.index', compact("registros"));
    }

    public function adicionar()
    {
      return view('admin.cursos.adicionar');
    }

    public function salvar(Request $req)
    {
      $dados = $req->all();

      if(isset($dados['publicado']))
      {
        $dados['publicado'] = 'sim';
      }
      else
      {
        $dados['publicado'] = 'nao';
      }

      //se tiver a imagem, verificando com hasFile
      if($req->hasFile('imagem'))
      {
        //vai pegar a imagem, pelo name, se recebeu
        $imagem = $req->file('imagem');
        //vai dar um nome de numero randomico entre esses valores para a imagem.
        $num = rand(1111,9999);
        //pega o diretorio que ira salvar.
        $dir = "img/cursos";
        //pegar a extensao com o metodo.
        $ex = $imagem->guessClientExtension();
        //concatena tudo.
        $nomeImagem = "imagem_" . $num . "." . $ex;
        //metodo para mover
        $imagem->move($dir, $nomeImagem);
        //caminho da imagem para salvar no banco.
        $dados['imagem'] = $dir . "/" . $nomeImagem;
      }

      Curso::create($dados);

      return redirect()->route('admin.cursos');

    }


    public function editar($id)
    {
      $registro = Curso::find($id);
      return view('admin.cursos.editar', compact('registro'));


    }

    public function atualizar(Request $req, $id)
    {
      $dados = $req->all();

      if(isset($dados['publicado']))
      {
        $dados['publicado'] = 'sim';
      }
      else
      {
        $dados['publicado'] = 'nao';
      }

      //se tiver a imagem, verificando com hasFile
      if($req->hasFile('imagem'))
      {
        //vai pegar a imagem, pelo name, se recebeu
        $imagem = $req->file('imagem');
        //vai dar um nome de numero randomico entre esses valores para a imagem.
        $num = rand(1111,9999);
        //pega o diretorio que ira salvar.
        $dir = "img/cursos";
        //pegar a extensao com o metodo.
        $ex = $imagem->guessClientExtension();
        //concatena tudo.
        $nomeImagem = "imagem_" . $num . "." . $ex;
        //metodo para mover
        $imagem->move($dir, $nomeImagem);
        //caminho da imagem para salvar no banco.
        $dados['imagem'] = $dir . "/" . $nomeImagem;
      }

      //vai dar um update no banco
      Curso::find($id)->update($dados);

      return redirect()->route('admin.cursos');

    }

    public function deletar($id)
    {
      Curso::find($id)->delete();
      return redirect()->route('admin.cursos');
    }

}
