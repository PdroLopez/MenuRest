<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sucursal as sucursal;
use App\Local as local;
use App\Producto as producto;
use App\Menu as menu;
use App\Estado as estado;
use App\User as user;
use Auth;
use Session;
use Log;
class SucursalController extends Controller
{
    public function store(Request $request)
    {
        $sucursal = new sucursal($request->all());
        $sucursal->users_id =Auth::user()->id;
        $numero_randon = mt_rand(1000, 9999);
        $sucursal->code = $numero_randon;
        $sucursal->save();
        Session::flash('success','El registro se ha realizado con exito');
        return \back();
    }
    public function sucursal_menu($id)
    {
        $menu = menu::where('sucursales_id',$id)->get();
        $local = local::where('users_id',Auth::user()->id)->pluck('nombre','id');
        $estado = estado::wherein('id',[1,5])->pluck('nombre','id');
        $sucursales = sucursal::where('users_id',Auth::user()->id)->pluck('nombre','id');
        return view('private.superadmin.sucursal.sucursal_menu',compact('sucursales','menu','local','estado'));
    }
    public function qr($code)
    {
        $sucursal = sucursal::where('code',$code)->first();
        $ruta = url('/m/'.$code);
        return view('private.superadmin.sucursal.qr.generate',compact('ruta','sucursal'));
    }
    public function sucursal($id)
    {
        $sucursal = Sucursal::where('locales_id',$id)->get();
        return view('private.superadmin.sucursal.home',compact('sucursal'));
    }
    public function ActivarSucursal($id)
    {
        $Sucursal = Sucursal::find($id);
        $Sucursal->estado_id = 1;
        $Sucursal->save();
        Session::flash('success','El Registro ha sido activado con exito');
        return back();
    }
    public function DesactivarSucursal($id)
    {
        $Sucursal = Sucursal::find($id);
        $Sucursal->estado_id = 5;
        $Sucursal->save();
        Session::flash('success','El Registro ha sido desactivado con exito');
        return back();
    }
    public function update(Request $request, $id)
    {
        $sucursal = sucursal::findOrFail($id);
        $sucursal->fill($request->all());
        $sucursal ->save();
        Session::flash('success','El registro se ha actualizado con exito');
        return back();
    }
    public function destroy($id)
    {
        $sucursal = sucursal::find($id);
        $sucursal->delete();
        Session::flash('success','El registro se ha eliminado con exito');
        return back();
    }
}
