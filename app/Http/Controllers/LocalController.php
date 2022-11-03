<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Local as local;
use App\Sucursal as sucursal;
use App\Estado as estado;

use Auth;
use Session;
use Log;
class LocalController extends Controller
{

    public function store(Request $request)
    {
        $local = new Local($request->all());
        $local->users_id =Auth::user()->id;
        if ($request->hasfile('fotografia')) {
            $file= $request->file('fotografia');
            $extension = $file->getClientOriginalExtension();
            $filename= time() . '.' .$extension;
            $file->move('public/imagen/',$filename);
            $local->fotografia = $filename;
        }
        else
        {
        }
        if ($request->hasfile('logo')) {
            $file= $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename= time() . '.' .$extension;
            $file->move('public/imagen/',$filename);
            $local->logo = $filename;
        }
        else
        {
        }
        $local->save();
        Session::flash('success','El registro se ha realizado con exito');
        return back();
    }
    public function local_sucursal($id)
    {

        $estado = estado::pluck('nombre','id');
        $sucursal = sucursal::where('users_id',Auth::user()->id)->where('locales_id',$id)->get();
        $local = local::where('users_id',Auth::user()->id)->pluck('nombre','id');
        return view('private.superadmin.local.local_sucursal',compact('sucursal','local','estado'));

    }
    public function update(Request $request, $id)
    {



        $local = Local::findOrFail($id);
        $local->fill($request->all());
        if ($request->hasfile('fotografia')) {
            $file= $request->file('fotografia');
            $extension = $file->getClientOriginalExtension();
            $filename= time() . '.' .$extension;
            $file->move('public/imagen/',$filename);
            $local->fotografia = $filename;
        }
        else
        {

        }
        if ($request->hasfile('logo')) {
            $file= $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename= time() . '.' .$extension;
            $file->move('public/imagen/',$filename);
            $local->logo = $filename;
        }
        else
        {

        }

        $local->save();
        Session::flash('success','El registro se ha actualizado con exito');

        return back();


    }

    public function destroy($id)
    {


        $producto = Local::find($id);
        $producto->delete();
        Session::flash('success','El registro se ha eliminado con exito');

        return back()->with('Datos eliminado');
    }

    public function ver_local($id)
    {
        $local = local::find($id);
        return view('private.superadmin.local.detalle',compact('local'));
    }

    public function ActivarLocal($id)
    {
        $local = local::find($id);
        $local->estado_id = 1;
        $local->save();
        Session::flash('success','El Registro ha sido activado con exito');
        return back();
    }
    public function DesactivarLocal($id)
    {
        $local = local::find($id);
        $local->estado_id = 5;
        $local->save();
        Session::flash('success','El Registro ha sido desactivado con exito');
        return back();
    }

    public function MantenedorLocal()
    {
    }


}
