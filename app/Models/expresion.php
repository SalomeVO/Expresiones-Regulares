<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expresion extends Model
{
    use HasFactory;

    public $table='expresiones';
    public $timestamps=false;
    protected $fillable =[
        'nombre', 'apellido','email',
    ];


}
