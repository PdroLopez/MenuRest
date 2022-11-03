<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Database\Eloquent\Collection\random;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use App\Local as local;
use App\Sucursal as sucursal;
use App\Estado as estado;
use App\User as user;
use App\Menu as menu;
use App\Producto as producto;
use Session;
use Auth;
use App\Bingo as bingo;
use App\Participante as participante;
use App\Boleto as boleto;
use App\Categoria as categoria;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {
        if (Auth::user()->rol_id == 1 || Auth::user()->rol_id == 2) {

          return view('private.superadmin.index');
        }elseif(Auth::user()->rol_id == 3){
          return redirect('private/juegos');
        }
    }
    public function show()
    {
        $menu = menu::where('users_id',auth()->id())->pluck('nombre','id');
        $local = local::where('users_id',auth()->id())->pluck('nombre','id');
        $estado = estado::wherein('id',[1,5])->pluck('nombre','id');
        $categoria = categoria::where('users_id',auth()->id())->pluck('nombre','id');
        $sucursales = sucursal::where('users_id',auth()->id())->pluck('nombre','id');
        $sucursal = sucursal::where('users_id',auth()->id())->get();
        $restaurante = user::where('id',auth()->id())->get();
        // dd($sucursal);
        return view('private.restaurant.home',compact('sucursal','menu','local','estado','sucursales','categoria','restaurante'));
    }
    public function menu($code)
    {
        $menu = Menu::where('estado_id',1)->get();
       return \view('private.superadmin.local.menu_cliente',\compact('menu'));
    }

    public function restaurant()
    {
        $menu = menu::pluck('nombre','id');
        $local = local::pluck('nombre','id');
        $estado = estado::pluck('nombre','id');
        $categoria = categoria::where('users_id',auth()->id())->pluck('nombre','id');



        $sucursales = sucursal::pluck('nombre','id');
        $sucursal = sucursal::all();
        $restaurante = user::where('id',auth()->id())->get();
        return view('private.restaurant.home',compact('sucursal','menu','local','estado','sucursales','categoria','restaurante'));
    }





}
