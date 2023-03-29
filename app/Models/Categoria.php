<?php

namespace App\Models;

use App\Models\User;
use App\Models\Tarefa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'cor',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function tarefas(){
        return $this->hasMany(Tarefa::class);
    }
}
