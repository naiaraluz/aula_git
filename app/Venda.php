<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    protected $table = 'venda';
    protected $primaryKey = 'id';

    function cliente(){
    	return $this->belongsTo('App\Cliente', 'id_cliente', 'id');
    }
}
