<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categoria";

    protected $fillable = ["id",'nombre','estado_id'];


    public function estado(){
        return $this->belongsTo('App\Estado', 'estado_id');
    }
    public function producto(){
        return $this->belongsTo(Producto::class, 'categoria_id');
    }

}
