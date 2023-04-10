<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Categoria;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarefa>
 */
class TarefaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $user = User::all()->random();
        
        while(count($user->categorias) == 0){
            $user = User::all()->random();
        }

        return [
            'esta_feito' => $this->faker->boolean(55),
            'titulo' => $this->faker->text(30),
            'descricao' => $this->faker->dateTime(),
            'due_data' => $this->faker->dateTime(),
            'user_id' => $user,
            'categoria_id' => $user->categorias->random()
        ];
    }
}
