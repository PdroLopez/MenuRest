<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria as categoria;
use Session;
use Log;

class CategoriaController extends Controller
{
    public function store(Request $request)
    {
        $categoria = new categoria($request->all());
        $categoria->save();
        Session::flash('success','El registro se ha realizado con exito');

        return \back();
    }

    public function update(Request $request, $id)
    {
        $categoria = categoria::findOrFail($id);
        $categoria->fill($request->all());
        $categoria ->save();
        Session::flash('success','El registro se ha actualizado con exito');

        return back();



    }

    public function destroy($id)
    {
        $categoria = categoria::find($id);
        $categoria->delete();
        Session::flash('success','El registro se ha eliminado con exito');

        return back();

    }

    public function DesactivarCategoria($id)
    {
        $categoria = categoria::find($id);
        $categoria->estado_id = 5;
        $categoria->save();
        Session::flash('success','El Registro ha sido desactivado con exito');
        return back();
    }

    public function ActivarCategoria($id)
    {
        $categoria = categoria::find($id);
        $categoria->estado_id = 5;
        $categoria->save();
        Session::flash('success','El Registro ha sido desactivado con exito');
        return back();
    }

}
