<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenos', function (){
   return 'essa é a pagina sobre nós';

});

Route::get('/home', function (){
   return 'essa é a pagina home';

});


Route::get('/curses', function (){
   return 'essa pagina contém os cursos';

});


Route::get('/log-in', function (){
   return 'essa é a pagina de login';

});

Route::get('/cadastro', function (){
   return 'essa é a pagina de cadastro';

});

Route::get('/recu-senha', function (){
   return 'essa é a pagina de recuperação de senha';

});

Route::get('/meus-cursos', function (){
   return 'essa é a pagina de cursos';

});