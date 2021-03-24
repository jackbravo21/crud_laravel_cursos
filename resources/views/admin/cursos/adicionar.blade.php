@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')

  <div class="container">

        <h3 class="center">Adicionar Curso</h3>

        <div class="row">
                                                      <!-- tem que add o enctype para poder subir arquivos -->
          <form class="" action="{{route('admin.cursos.salvar')}}" method="post" enctype="multipart/form-data">
            <!-- Token -->
            {{ csrf_field() }}

            @include('admin.cursos._form')

            <button class="btn deep-orange">Salvar</button>

          </form>
        </div>
  </div>





@endsection
