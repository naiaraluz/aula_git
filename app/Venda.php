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

    public function produtos() {
        return $this->belongsToMany('App\Produto', 'produtos_venda', 'id_venda', 'id_produto');
    }
}
