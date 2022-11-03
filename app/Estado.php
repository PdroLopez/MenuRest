<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = "estado";

    protected $fillable = ["nombre"];

    public function bingo(){
        return $this->hasMany(Bingo::class, 'estado_id');
    }

    public function boleto(){
        return $this->hasMany(Boleto::class, 'estado_id');
    }
    public function menu(){
        return $this->hasMany(Menu::class, 'menu_id');
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }


}
