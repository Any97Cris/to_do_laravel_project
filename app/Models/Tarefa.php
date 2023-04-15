<?php

namespace App\Models;

use App\Models\User;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;

    protected $fillable = [
        'esta_feito',
        'titulo',
        'due_data',
        'descricao',
        'user_id',
        'categoria_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
}
