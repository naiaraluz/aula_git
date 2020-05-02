<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produtos';
    protected $primaryKey = 'id';

    public function venda() {
        return $this->belongsToMany('App\Venda', 'produtos_venda', 'id_produto', 'id_venda');
    }
}
