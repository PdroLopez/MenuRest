<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";

    protected $fillable = ["id","nombre","locales_id","estado_id","sucursales_id","productos_id","code","estilo"];

    public function local(){
        return $this->belongsTo('App\Local', 'locales_id');
    }
    public function estado(){
        return $this->belongsTo('App\Estado', 'estado_id');
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    public function producto(){
        return $this->belongsTo(Producto::class, 'menus_id');
    }
    public function sucursal(){
        return $this->belongsTo('App\Sucursal', 'menus_id');
    }


}
