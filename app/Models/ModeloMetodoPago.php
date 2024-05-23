<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloMetodoPago extends Model
{
    use HasFactory;
    protected $table = 'metodo_pago';
    protected $primaryKey = 'id';
    public $timestamps = false;
}