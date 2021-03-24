
<!DOCTYPE html>
<html lang="pt-br">
  <head>

      <meta charset="utf-8">

      <title>@yield('titulo')</title>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <!-- Compiled and minified CSS-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
      <!--
      <link rel="stylesheet" href="/materialize/css/materialize.min.css">
      -->
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>

    <header>
      <nav>
       <div class="nav-wrapper deep-orange">
         <div class="container">
           <a href="#!" class="brand-logo">Projeto em Laravel</a>
           <a href="#" data-activates="mobile" class="button-collapse"><i class="material-icons">menu</i></a>
           <ul class="right hide-on-med-and-down">
             <li><a href="/">Home</a></li>

             @if(Auth::guest())

             <li><a href="{{route('site.login')}}">Login</a></li>

             @else

             <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
             <!-- o Auhh tem todos os metodos do user, vou pegar o name  -->
             <li>Bem vindo <strong>{{Auth::user()->name}}!</strong></li>
             <li><a href="{{route('site.login.sair')}}">Sair</a></li>

             @endif

           </ul>
           <ul class="side-nav" id="mobile">
             <li><a href="/">Home</a></li>
           </ul>
         </div>
       </div>
     </nav>
    </header>
