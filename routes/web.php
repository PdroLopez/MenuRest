<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// vistas provisorias

Route::view('private/restaurant', 'private.restaurant.home');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'web'], function(){

  //Route::get('/home', 'Rol_SuperAdminController@home');
  Route::get('/home', 'HomeController@show')->name('home');
  Route::get('/m/{code}','MenuController@codigo');
  Route::get('private/sucursal/qr/{code}','SucursalController@qr');


  Route::get('/bingo/{token}', 'BingoController@token')->name('bingo_token');
  //socialite
  Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
  Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
  Route::get('/escanear-menu', 'MenuController@Escanear');
  Route::get('/revisar-menu', 'MenuController@Revisar');

  Route::view('terminos-y-condiciones', 'terminos_condiciones');
  Route::view('equipo', 'equipo');
  Route::view('contacto', 'contacto');
  Route::view('soporte', 'soporte');
  Route::view('acerca-de', 'acerca_de');
  Route::view('preguntas', 'preguntas');
  Route::view('chat', 'chat');
  Route::view('preguntas', 'preguntas');
  Route::view('carrito-resumen', 'carrito_resumen');
  Route::view('crear-bingo', 'bingo.crear_bingo');
  Route::view('que-es-bingo', 'que_es');
  Route::view('precios', 'precios');
  Route::get('menu/estilo1', 'MenuController@estilo');
  Route::get('menu/estilo2', 'MenuController@estilo2');
  Route::get('qrmenu/{code}', 'MenuController@qrmenu');

  Route::group(['middleware' => 'auth'], function () {
    Route::get('home/local', 'Rol_SuperAdminController@local');
    Route::get('home/menu', 'Rol_SuperAdminController@menu');
    Route::get('home/producto', 'Rol_SuperAdminController@producto');
    Route::get('home/categoria', 'Rol_SuperAdminController@categoria');
    Route::get('home/local/sucursal/{id}', 'LocalController@local_sucursal');
    Route::get('home/sucursal-menu/{id}', 'SucursalController@sucursal_menu');
    Route::get('home/menu/productos/{id}', 'MenuController@menu_productos');

    Route::get('home/sucursal', 'Rol_SuperAdminController@sucursal');
    Route::get('producto/activar-producto/{id}', 'ProductoController@ActivarProducto');
    Route::get('producto/desactivar-producto/{id}', 'ProductoController@DesactivarProducto');
    Route::get('local/activar-local/{id}', 'LocalController@ActivarLocal');
    Route::get('local/desactivar-local/{id}', 'LocalController@DesactivarLocal');
    Route::get('menu/activar-menu/{id}', 'MenuController@ActivarMenu');
    Route::get('menu/desactivar-menu/{id}', 'MenuController@DesactivarMenu');
    Route::get('sucursal/activar-sucursal/{id}', 'SucursalController@ActivarSucursal');
    Route::get('sucursal/desactivar-sucursal/{id}', 'SucursalController@DesactivarSucursal');
    Route::get('private/productos/{id}', 'ProductoController@hola');
  });


  // seccion privada ss

  Route::group(['middleware' => 'auth','prefix' => 'private'], function () {


    Route::group(['middleware' => 'admin', 'prefix' => 'superadmin'], function () {
      Route::get('estado', 'Rol_SuperAdminController@estado');
      Route::get('usuarios', 'Rol_SuperAdminController@usuarios');
      Route::get('rol', 'Rol_SuperAdminController@rol');
      //
      Route::get('local', 'Rol_SuperAdminController@local');

      //
      Route::get('menu', 'Rol_SuperAdminController@menu');

      //
      Route::get('producto', 'Rol_SuperAdminController@producto');

      //
      Route::get('sucursal', 'Rol_SuperAdminController@sucursal');

      //
      Route::get('categoria', 'Rol_SuperAdminController@categoria');

      Route::get('home', 'Rol_SuperAdminController@home');

      Route::get('local/{id}','LocalController@ver_local');
      Route::get('menu/{id}','MenuController@menu');


      Route::get('tipo-bingo', 'Rol_SuperAdminController@tipo_bingo');
      Route::get('tipo-juego', 'Rol_SuperAdminController@tipo_juego');
      Route::get('bingos', 'Rol_SuperAdminController@mantenedor_bingos');
      Route::get('bingos/{id}/boletos', 'Rol_SuperAdminController@bingo_boletos');
      Route::get('bingos/{id}/participante', 'Rol_SuperAdminController@bingo_participantes');
    });

    Route::view('me', 'private/me');
    Route::get('restaurant', 'HomeController@restaurant')->name('restaurant');

    Route::resource('mantenedor-estado','EstadoController');
    Route::delete('mantenedor-estado/{id}',
        array(
            'uses'=>'EstadoController@destroy',
            'as'=>'mantenedor-estado.delete'
        )
    );
    //



    Route::resource('mantenedor-rol','RolController');
    Route::delete('mantenedor-rol/{id}',
        array(
            'uses'=>'RolController@destroy',
            'as'=>'mantenedor-rol.delete'
        )
    );

    Route::resource('mantenedor-cantado','CantadoController');
    Route::delete('mantenedor-cantado/{id}',
        array(
            'uses'=>'CantadoController@destroy',
            'as'=>'mantenedor-cantado.delete'
        )
    );

    Route::resource('mantenedor-tipo-bingo','TipoBingoController');
    Route::delete('mantenedor-tipo-bingo/{id}',
        array(
            'uses'=>'TipoBingoController@destroy',
            'as'=>'mantenedor-tipo-bingo.delete'
        )
    );

    Route::resource('mantenedor-tipo-juego','TipoJuegoController');
    Route::delete('mantenedor-tipo-juego/{id}',
        array(
            'uses'=>'TipoJuegoController@destroy',
            'as'=>'mantenedor-tipo-juego.delete'
        )
    );

    Route::resource('mantenedor-usuarios','UserController');
    Route::delete('mantenedor-usuarios/{id}',
      array(
        'uses'=>'UserController@destroy',
        'as'=>'mantenedor-usuarios.delete'
      )
    );

    Route::resource('mantenedor-bingo','BingoController');
    Route::delete('mantenedor-bingo/{id}',
        array(
            'uses'=>'BingoController@destroy',
            'as'=>'mantenedor-bingo.delete'
        )
    );

    Route::resource('mantenedor-boleto','BoletoController');
    Route::delete('mantenedor-boleto/{id}',
        array(
            'uses'=>'BoletoController@destroy',
            'as'=>'mantenedor-boleto.delete'
        )
    );


    Route::resource('mantenedor-participante','ParticipanteController');
    Route::delete('mantenedor-usuario/{id}',
        array(
            'uses'=>'ParticipanteController@destroy',
            'as'=>'mantenedor-participante.delete'
        )
    );
    //Local
    Route::resource('mantenedor-local','LocalController');
    Route::delete('mantenedor-local/{id}',
        array(
            'uses'=>'LocalController@destroy',
            'as'=>'mantenedor-local.delete'
        )
    );
    //menu
    Route::resource('mantenedor-menu', 'MenuController');
    Route::delete('mantenedor-menu/{id}',
        array(
            'uses'=>'MenuController@destroy',
            'as'=>'mantenedor-menu.delete'
        )
    );
    //producto
    Route::resource('mantenedor-producto', 'ProductoController');
    Route::delete('mantenedor-producto/{id}',
        array(
            'uses'=>'ProductoController@destroy',
            'as'=>'mantenedor-producto.delete'
        )
    );
    //Categoria
    Route::resource('mantenedor-categoria', 'CategoriaController');
    Route::delete('mantenedor-categoria/{id}',
        array(
            'uses'=>'CategoriaController@destroy',
            'as'=>'mantenedor-categoria.delete'
        )
    );

    //sucursal
    Route::resource('mantenedor-sucursal', 'SucursalController');
    Route::delete('mantenedor-sucursal/{id}',
        array(
            'uses'=>'SucursalController@destroy',
            'as'=>'mantenedor-sucursal.delete'
        )
    );




  });

});
