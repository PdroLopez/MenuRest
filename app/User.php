<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table ="users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'telefono', 'password','proovedor_id','proovedor','rol_id','nombre_restaurante','imagen_restaurante','descripcion_restaurante'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rol(){
        return $this->belongsTo('App\Rol', 'rol_id');
    }

    public function local(){
        return $this->belongsTo('App\Local', 'local_id');
    }
    public function sucursal(){
        return $this->belongsTo('App\Sucursal', 'sucursal_id');
    }



}
