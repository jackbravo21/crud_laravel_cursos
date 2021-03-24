<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Curso;

class HomeController extends Controller
{

  public function index()
  {
    //aqui eu estou listando todos os registros, mas para paginar, basta colocar o paginate,
    //entre os parenteses, podemos especificar, quantos registros queremos por pagina.

    //$cursos = Curso::all();
    $cursos = Curso::paginate(3);
    //$cursos = Curso::paginate(3);   == isso faria com que fosse exibido 3
                                      // cursos por pagina soh.

    return view('home', compact('cursos'));
  }



}
