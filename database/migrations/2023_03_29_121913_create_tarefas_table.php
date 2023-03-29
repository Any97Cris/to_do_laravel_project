<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Categoria;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tarefas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->dateTime('due_data');
            $table->string('descricao');
            $table->foreignIdFor(User::class)->references('id')->on('users')->onDelete('CASCADE');
            $table->foreignIdFor(Categoria::class)->references('id')->on('categorias');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('tarefas', function (Blueprint $table) {            
            $table->dropForeignIdFor(User::class);
            $table->dropForeignIdFor(Categoria::class);
        });
        Schema::dropIfExists('tarefas');
    }
};
