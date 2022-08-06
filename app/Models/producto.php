<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'productos';

    public function sucursales(){
        return $this->belongsTo('App\Models\sucursal', 'sucursal_id');
    }

    public function categorias(){
        return $this->belongsTo('App\Models\categoria', 'categoria_id');
    }

    
}
