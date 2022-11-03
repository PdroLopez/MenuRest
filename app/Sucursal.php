<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = "sucursales";

    protected $fillable = ['nombre','locales_id','menus_id','code','direccion','estado_id'];

    public function user(){
        return $this->hasMany(User::class, 'sucursales_id');
    }
    public function local(){
        return $this->belongsTo(Local::class, 'locales_id');
    }
    public function menu(){
        return $this->belongsTo(Menu::class, 'menus_id');
    }
    public function estado(){
        return $this->belongsTo(Estado::class, 'estado_id');
    }

}
