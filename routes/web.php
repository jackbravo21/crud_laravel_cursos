<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
Route::get('/', function () {
    return view('home');
});
*/

Route::get('/',['as'=>'site.home', 'uses'=>'Site\HomeController@index']);

//rota padrao do middleware
Route::get('/login',['as'=>'site.login', 'uses'=>'Site\LoginController@index']);

Route::get('/login/sair',['as'=>'site.login.sair', 'uses'=>'Site\LoginController@sair']);

Route::post('/login/entrar',['as'=>'site.login.entrar', 'uses'=>'Site\LoginController@entrar']);

//vou usar um grupo de rotas, com um array, indicando qual vai utilizar.
route::group(['middleware'=>'auth'], function()
{
//o que estiver aqui dentro, estará protegido pela autenticacao.

//"as" eh um apelido definido que ele vai ser chamado na rota.
Route::get('admin/cursos',['as'=>'admin.cursos', 'uses'=>'Admin\CursoController@index']);

Route::get('admin/cursos/adicionar',['as'=>'admin.cursos.adicionar', 'uses'=>'Admin\CursoController@adicionar']);

Route::post('admin/cursos/salvar',['as'=>'admin.cursos.salvar', 'uses'=>'Admin\CursoController@salvar']);

Route::get('admin/cursos/editar/{id}',['as'=>'admin.cursos.editar', 'uses'=>'Admin\CursoController@editar']);

Route::put('admin/cursos/atualizar/{id}',['as'=>'admin.cursos.atualizar', 'uses'=>'Admin\CursoController@atualizar']);

Route::get('admin/cursos/deletar/{id}',['as'=>'admin.cursos.deletar', 'uses'=>'Admin\CursoController@deletar']);


});
