<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Perfil extends model
{
    
    
    protected $fillable = [ 'nomePerfil','descricao'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'perfil';

    public function usuario(){
        return $this->belongsTo('App\Perfil');
    }

}


