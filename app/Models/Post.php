<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts'; //si el modelo no se llama igual que la tabla, se debe especificar el nombre de la tabla

    protected function casts(): array
    { //convierte los campos de la tabla a un tipo de dato especifico
        return [
            'published_at' => 'datetime', //convierte el campo published_at a un objeto de tipo datetime
            'is_active' => 'boolean' //convierte el campo is_active a un objeto de tipo boolean 
            

        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function ($value) {
                return strtolower($value); //strtolower convierte el texto a minusculas
            },
            get: function ($value) {
                return ucfirst($value); //ucfirst convierte la primera letra a mayuscula
            }
        );
    }
}
