<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloProducto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $primaryKey = 'id';
    public $timestamps = false;
}