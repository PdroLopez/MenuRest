<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Producto extends Model
{
    protected $table = "productos";

    protected $fillable = ['id','nombre',
    'descripcion','imagen','valor','descuento','menus_id','estado_id','_token','categoria_id'];

    protected $guarded = ['id', '_token'];




    public function estado(){
        return $this->belongsTo('App\Estado', 'estado_id');
    }



    public function menus(){
        return $this->belongsTo('App\Menu','menus_id');
    }

    public function categoria(){
        return $this->belongsTo('App\Categoria','categoria_id');
    }



}
