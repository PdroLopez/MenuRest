<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu as menu;
use App\Producto as producto;
use App\Sucursal as sucursal;
use App\Categoria as categoria;
use App\Estado as estado;



use Auth;
use Session;
use Log;
class MenuController extends Controller
{
    public function store(Request $request)
    {
        $menu = new menu($request->all());
        $menu->users_id =Auth::user()->id;

        $menu->save();
        Session::flash('success','El registro se ha realizado con exito');

        return \back();
    }
    public function prueba()
    {
        return view('home');
    }
    public function menu_productos($id)
    {
        dd(Auth::user()->id);
        $producto = Producto::where('menus_id',$id)->get();
        $menu = menu::where('users_id',Auth::user()->id)->pluck('nombre','id');
        $estado = estado::wherein('id',[1,5])->pluck('nombre','id');
        $menu_select = menu::where('users_id',Auth::user()->id)->pluck('nombre','id');
        $categorias = Categoria::pluck('nombre','id');
        $sucursal = sucursal::where('users_id',Auth::user()->id)->pluck('nombre','id');
        return view('private.superadmin.menu.menu_productos',compact('menu_select','producto','menu','estado','categorias','sucursal'));

    }
    public function codigo($code)
    {
       if(Count(Sucursal::where('code',$code)->get())>0)
        {
            $sucursal = Sucursal::where('code',$code)->pluck('id');
            $sucursal_encontrada = Sucursal::find($sucursal);
            //  $id_menu = $sucursal_encontrada[0]->menus_id;
            //  $productos = producto::where('menus_id',$id_menu)->get();
            $menu_id = Menu::where('sucursales_id',$sucursal_encontrada[0]->id)->orwhere('locales_id',$sucursal_encontrada[0]->locales_id)->pluck('id');
            $productos = Producto::wherein('menus_id',$menu_id)->get();
            $plato = categoria::where('nombre','Platos')->get();
            $vino = categoria::where('nombre','Vinos')->get();
            $postre = categoria::where('nombre','Postres')->get();
            $sopa = categoria::where('nombre','Sopas')->get();
            // dd($productos);
            // //  $Sucursal =$sucursal[0];
            //  $menu = Menu::where('sucursales_id',$sucursal)->OrWhere('estado_id',1)->pluck('id');
            //  $platos_menu = Producto::Where('categoria_id',6)->where('menus_id',$menu)->OrWhere('users_id',Auth::user()->id)->get();
            //  $vinos_menu = Producto::Where('categoria_id',7)->where('menus_id',$menu)->OrWhere('users_id',Auth::user()->id)->get();
            //  $postres_menu = Producto::Where('categoria_id',8)->where('menus_id',$menu)->OrWhere('users_id',Auth::user()->id)->get();
            //  $sopas_menu = Producto::Where('categoria_id',9)->where('menus_id',$menu)->OrWhere('users_id',Auth::user()->id)->get();
             return view('menu.estilo1',compact('productos','plato','vino','postre','sopa'));

        }
        else
        {
            dd("no existe el codigo");
        }


    }
    public function Escanear()
    {
        $sucursal = sucursal::all();
        return view('escanear',compact('sucursal'));
    }
    public function Revisar()
    {
        return view('revisar');
    }
    public function update(Request $request, $id)
    {
        $menu = menu::findOrFail($id);
        $menu->fill($request->all());
        $menu ->save();
        Session::flash('success','El registro se ha actualizado con exito');

        return back();
    }

    public function estilo()
    {
        $plato= categoria::where('id',6)->get();
        $vino= categoria::where('id',7)->get();
        $postre= categoria::where('id',8)->get();
        $sopa= categoria::where('id',9)->get();
        $platos_menu  = producto::where('categoria_id',6)->get();
        $vinos_menu  = producto::where('categoria_id',7)->get();
        $postres_menu  = producto::where('categoria_id',8)->get();
        $sopas_menu  = producto::where('categoria_id',9)->get();



        return view('menu.estilo1',compact('plato','vino','postre','sopa','platos_menu','vinos_menu','postres_menu','sopas_menu'));
    }

    public function estilo2()
    {
        $plato= categoria::where('id',6)->get();
        $vino= categoria::where('id',7)->get();
        $postre= categoria::where('id',8)->get();
        $sopa= categoria::where('id',9)->get();
        $platos_menu  = producto::where('categoria_id',6)->get();
        $vinos_menu  = producto::where('categoria_id',7)->get();
        $postres_menu  = producto::where('categoria_id',8)->get();
        $sopas_menu  = producto::where('categoria_id',9)->get();



        return view('menu.estilo2',compact('plato','vino','postre','sopa','platos_menu','vinos_menu','postres_menu','sopas_menu'));
    }



    public function menu($id)
    {

        $menu = Menu::where('sucursales_id',$id)->get();
        $menu2 = Menu::where('sucursales_id',$id)->pluck('id');
        $producto = producto::where('categoria_id',6)->where('menus_id',12)->get();
        return view('private.superadmin.menu.home',compact('menu','producto'));

    }
    public function ActivarMenu($id)
    {
        $Menu = Menu::find($id);
        $Menu->estado_id = 1;
        $Menu->save();
        Session::flash('success','El Registro ha sido activado con exito');
        return back();
    }
    public function DesactivarMenu($id)
    {
        $Menu = Menu::find($id);
        $Menu->estado_id = 5;
        $Menu->save();
        Session::flash('success','El Registro ha sido desactivado con exito');
        return back();
    }
    public function qrmenu($code)
    {
        $sucursal = sucursal::where('code',$code)->first();
        $ruta = url('/m/'.$code);
        return view('qrmenu',compact('ruta','sucursal'));

    }
    public function destroy($id)
    {
        $menu = menu::find($id);
        $menu->delete();
        Session::flash('success','El registro se ha eliminado con exito');

        return back();

    }
}
