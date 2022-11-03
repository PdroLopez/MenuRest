<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Session;
use Auth;
use App\Local as local;
use App\Menu as menu;
use App\Producto as producto;
use App\Estado as estado;
use App\User as usuario;
use App\TipoJuego as tipo_juego;
use App\TipoBingo as tipo_bingo;
use App\Bingo as bingo;
use App\Rol as rol;
use App\Sucursal as sucursal;
use App\Categoria as categoria;

use App\Boleto as boleto;
use App\Participante as participante;
use App\Http\Controllers\PruebaApiController as api;
use Log;

class Rol_SuperAdminController extends Controller
{
    public function bingos(){
      $bingos = bingo::orderBy('id','DESC')->paginate(6);
      return view("lista_bingo", compact('bingos'));
    }

    public function comprar_bingo($codigo){
        $bingo = bingo::where('codigo',$codigo)->first();
        $boletos = boleto::where('bingo_id',$bingo->id)->where('estado_id', 1)->get();
        return view("private.bingo.compra_1", compact('bingo','boletos'));
    }

    public function comprar_boletos($codigo, Request $request){
      $bingo = bingo::where('codigo', $codigo)->first();

      if($request->total == 0){
        foreach($request->Boletos as $boleto_id){
          $boleto_participante = new participante();
          $boleto_participante->boleto_id = $boleto_id;
          $boleto_participante->users_id = Auth::user()->id;
          $boleto_participante->bingo_id = $bingo->id;
          $boleto_participante->save();
          $boleto = boleto::find($boleto_id);
          $boleto->estado_id = 3;
          $boleto->save();
        }

        return redirect('/home');

      }
    }

    public function mantenedor_bingos(){
      $bingos = bingo::orderBy('id','DESC')->paginate(6);
      return view("private.superadmin.bingo.index",compact('bingos'));
    }

    public function usuarios()
    {
        $usuarios = usuario::paginate(10);
        $roles = rol::pluck('nombre','id');
        return view("private.superadmin.usuario.index",compact('usuarios','roles'));
    }

    public function local()
    {
        $local = local::where('users_id',Auth::user()->id)->get();
        $users = usuario::pluck('name','id');
        $estado = estado::wherein('id',[1,5])->pluck('nombre','id');
        $sucursal = sucursal::where('users_id',Auth::user()->id)->pluck('nombre','id');
        return view("private.superadmin.local.index",compact('local','users','estado','sucursal'));

    }

    public function menu()
    {
        $menu = menu::where('users_id',Auth::user()->id)->get();
        $local = local::where('users_id',Auth::user()->id)->pluck('nombre','id');
        $estado = estado::wherein('id',[1,5])->pluck('nombre','id');
        $sucursales = sucursal::where('users_id',Auth::user()->id)->pluck('nombre','id');
        return view("private.superadmin.menu.index",compact('sucursales','menu','local','estado'));
    }
    public function sucursal()
    {
        $sucursal = sucursal::where('users_id',Auth::user()->id)->get();
        $local = local::where('users_id',Auth::user()->id)->pluck('nombre','id');
        $estado = estado::wherein('id',[1,5])->pluck('nombre','id');
        return view("private.superadmin.sucursal.index",compact('sucursal','local','estado'));
    }

    public function categoria()
    {
        $categoria = Categoria::where('users_id',Auth::user()->id)->get();

        $estado = estado::wherein('id',[1,5])->pluck('nombre','id');
        return view("private.superadmin.categoria.index",compact('categoria','estado'));
    }
    public function producto()
    {
        $producto = Producto::where('users_id',auth()->id())->get();
        $menu = menu::where('users_id',Auth::user()->id)->pluck('nombre','id');
        $estado = estado::wherein('id',[1,5])->pluck('nombre','id');
        $menu_select = menu::where('users_id',Auth::user()->id)->pluck('nombre','id');

        $categorias = Categoria::pluck('nombre','id');
        $sucursal = sucursal::where('users_id',Auth::user()->id)->pluck('nombre','id');
        return view("private.superadmin.producto.index",compact('menu_select','producto','menu','estado','categorias','sucursal'));
    }

    public function rol()
    {
        $roles = rol::all();
        return view("private.superadmin.rol.index",compact('roles'));
    }

    public function estado()
    {
        $estados = estado::all();
        return view("private.superadmin.estado.index",compact('estados'));
    }

    public function tipo_bingo()
    {
        $tipo_bingos = tipo_bingo::all();
        return view("private.superadmin.tipo_bingo.index",compact('tipo_bingos'));
    }

    public function tipo_juego()
    {
        $tipo_juegos = tipo_juego::all();
        return view("private.superadmin.tipo_juego.index",compact('tipo_juegos'));
    }

    public function me(){
        $bingo = bingo::orderBy('id','DESC')->where('users_id',Auth::user()->id)->paginate(4);
        $total = bingo::where('users_id',Auth::user()->id)->get();
        $i = 0;
        foreach ($total as $value) {
            $i++;
        }
        return view('private.mis_bingos',compact('bingo','i'));
    }

    public function bingo_boletos($id)
    {
        dd('bingo_boletos');
        // $tipo_juegos = tipo_juego::all();
        return view("private.superadmin.tipo_juego.index",compact('tipo_juegos'));
    }

    public function bingo_all($id)
    {
        dd('bingo_boletos');

        // $tipo_juegos = tipo_juego::all();
        return view("private.superadmin.tipo_juego.index",compact('tipo_juegos'));
    }

    public function bingo_participantes($id)
    {
        dd('bingo_boletos');

        // $tipo_juegos = tipo_juego::all();
        return view("private.superadmin.tipo_juego.index",compact('tipo_juegos'));
    }

    public function home()
    {
        $estado = estado::pluck('nombre','id');
        $sucursal = sucursal::pluck('nombre','id');

        $usuarioLogueado = local::where('users_id',Auth::user()->id)->get();
        return view('private.superadmin.index',compact('usuarioLogueado','estado','sucursal'));
    }

}
