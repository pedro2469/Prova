<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelPessoa extends Model
{
    use HasFactory;

    protected $table='pessoas';
    protected $fillable=['nome','cpf','dataNascimento'];
}
