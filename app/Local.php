<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $table = "locales";

    protected $fillable = ["nombre","descripcion","fotografia","logo","direccion","web","correo","telefono","users_id","estado_id","sucursales_id"];


    public function user(){
        return $this->belongsTo('App\User', 'users_id');
    }
    public function estado(){
        return $this->belongsTo('App\Estado', 'estado_id');
    }
    public function sucursal(){
        return $this->belongsTo('App\Sucursal', 'sucursales_id');
    }




}
