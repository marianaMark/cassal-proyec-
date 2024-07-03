<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use  Illuminate\Database\Eloquent\SoftDeletes; 

class Categoria extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'categorias';

    protected $fillable = [
        'nombre',
    ];

    protected $dates = ['deleted_at']; 

    public function productos()
    {
        return $this->hasMany('App\Models\Producto');
    }
}
