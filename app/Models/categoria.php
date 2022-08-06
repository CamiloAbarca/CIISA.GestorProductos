<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'categorias';

    public function productos(){
        return $this->hasMany('App\Models\producto');
    }
}
