<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Usuarios extends model
{
    
    
    protected $fillable = [ 'id_perfil','name','email','telefone','dataNasc','cargo','salario','foto'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'usuarios';

    public function usuario(){
        return $this->belongsTo('App\Usuarios');
    }

}


