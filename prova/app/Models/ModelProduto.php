<?php

namespace App\models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelProduto extends Model
{
    use HasFactory;

    protected $table='produtos';
    protected $fillable = ['codigo','nome','precoUnitario'];
}
