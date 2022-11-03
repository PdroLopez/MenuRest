<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto as producto;
use App\Menu as menu;
use App\Sucursal as sucursal;
use App\Local as local;

use Auth;
use App\Estado as estado;
use App\Categoria as categoria;

use Session;
use Log;

use Illuminate\Support\Facades\Redirect;


class ProductoController extends Controller
{
    public function index()
    {


    }

    public function store(Request $request)
    {

        $request->validate([

            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);


        $producto = new producto( $request->except(['_token']));
        $producto->users_id =Auth::user()->id;

        if ($request->hasfile('imagen')) {
            $file= $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename= time() . '.' .$extension;
            $file->move('public/imagen/',$filename);
            $producto->imagen = $filename;
        }
        else
        {

        }

        $producto->save();
        Session::flash('success','El registro se ha realizado con exito');

        return back();

    }


    public function update(Request $request, $id)
    {
        $request->validate([

            'imagen' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);


        $producto = Producto::findOrFail($id);
        $menu->fill($request->all());

        if ($request->hasfile('imagen')) {
            $file= $request->file('imagen');
            $extension = $file->getClientOriginalExtension();
            $filename= time() . '.' .$extension;
            $file->move('public/imagen/',$filename);
            $producto->imagen = $filename;
        }
        else
        {

        }

        $producto->save();
        Session::flash('success','El registro se ha actualizado con exito');

        return back();


    }

    public function hola($id)
    {
        $sucursal = sucursal::find($id);
        $id_sucursal = $sucursal->id;
        // $id_local = $sucursal->locales_id;
        // $menuxd = menu::where('locales_id',$id_local)->get();
        // $id_menu = menu::where('locales_id',$id_local)->pluck('id');


        $menuxd = menu::where('sucursales_id',$id_sucursal)->get();
        $id_menu = menu::where('sucursales_id',$id_sucursal)->pluck('id');

        $menu_select = menu::where('users_id',Auth::user()->id)->pluck('nombre','id');
        $estado = estado::wherein('id',[1,5])->pluck('nombre','id');
        $categorias = categoria::where('users_id',Auth::user()->id)->pluck('nombre','id');

        // $menu_xx = menu::where('sucursales_id',$id)->pluck('id');
        // dd($menuxd);
        $producto = producto::wherein('menus_id',$id_menu)->where('users_id',Auth::user()->id)->get();
        // $menu = menu::where('users_id',Auth::user()->id)->orwhere('locales_id',$local_xx)->get();
        return view('private.superadmin.producto.ver-producto',compact('menu_select','producto','menuxd','estado','categorias'));

    }

    public function ActivarProducto($id)
    {
        $producto = producto::find($id);
        $producto->estado_id = 1;
        $producto->save();
        Session::flash('success','El Registro ha sido activado con exito');

        return back();


    }
    public function DesactivarProducto($id)
    {
        $producto = producto::find($id);
        $producto->estado_id = 5;
        $producto->save();
        Session::flash('success','El Registro ha sido desactivado con exito');

        return back();


    }
    public function destroy($id)
    {


        $producto = producto::find($id);
        $producto->delete();
        Session::flash('success','El registro se ha eliminado con exito');

        return back()->with('Datos eliminado');
    }
}
