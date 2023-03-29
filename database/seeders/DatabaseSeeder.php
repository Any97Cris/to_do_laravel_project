<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\TarefaSeeder;
use App\Models\User;
use App\Models\Categoria;
use App\Models\Tarefa;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call([
            
        // ]);
        User::factory(5)->create();
        Categoria::factory(5)->create();
        Tarefa::factory(5)->create();
        
    }
}
