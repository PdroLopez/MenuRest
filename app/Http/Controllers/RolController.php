<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Session;
use Auth;
use App\Rol as rol;

class RolController extends Controller
{

	public function store(Request $request)
    {
        $rol = new rol($request->all());
        $rol->save();
        Session::flash('success','El registro se ha realizado con exito');

        return redirect::back();
    }

    public function update(Request $request, $id)
    {
        $rol = rol::find($id);
        $rol->fill($request->all());
        $rol->save();
        Session::flash('success','El registro se ha actualizado con exito');

        return redirect::back();
    }

    public function destroy($id)
    {
        $rol = rol::find($id);
        $rol->delete();
        Session::flash('success','El registro se ha eliminado con exito');

        return redirect::back();
    }
}
