<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Session;
use Auth;
use App\User as users;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $users = new users($request->all());
        $users->password = bcrypt($request->password);
        $users->save();
        Session::flash('success','El registro se ha realizado con exito');
        return redirect::back();
    }

    public function update(Request $request, $id)
    {
        $request->validate([

            'imagen_restaurante' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',


        ]);
        $users = users::find($id);
        $users->fill($request->all());
        $users->password = bcrypt($request->password);
        if ($request->hasfile('imagen_restaurante')) {
            $file= $request->file('imagen_restaurante');
            $extension = $file->getClientOriginalExtension();
            $filename= time() . '.' .$extension;
            $file->move('public/restaurante/imagen',$filename);
            $users->imagen_restaurante = $filename;
        }
        else
        {

        }
        $users->save();
        Session::flash('success','El registro se ha actualizado con exito');
        return redirect::back();
    }

    public function destroy($id)
    {

        $users = users::find($id);
        $users->delete();
        Session::flash('success','El registro se ha eliminado con exito');
        return redirect::back();
    }
}
