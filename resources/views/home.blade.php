@extends('layout.site')

@section('titulo', 'Cursos')

@section('conteudo')

  <div class="container">

        <h3 class="center">Lista de Cursos</h3>



  <div class="row">

@foreach($cursos as $curso)

    <!-- s eh para desktop, e o m para mobile -->
    <div class="col s12 m4">
      <div class="card">
        <div class="card-image">
          <img src="{{asset($curso->imagem)}}">

        </div>
        <div class="card-content">
          <h4>{{$curso->titulo}}</h4>
          <p>{{$curso->descricao}}</p>
        </div>
        <div class="card-action">
          <a href="#">Acesse o Curso</a>
        </div>
      </div>
    </div>

@endforeach

  </div>

<div class="row" align="center">

  <!-- metodo links eh os numeros paginados que aparecem -->
  {{$cursos->links()}}

</div>







  </div>





@endsection
