<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Movimentacao;
use App\Models\Produto;

class MovimentacaoFactory extends Factory
{

    protected $model = Movimentacao::class;

    public function definition(): array
    {
        return [
             'tipo' => $this->faker->randomElement(['entrada', 'saida']),
            'produto_id' => Produto::inRandomOrder()->first()->id ?? Produto::factory(),
            'quantidade' => $this->faker->numberBetween(1, 50),
            'observacao' => $this->faker->optional()->sentence,
        ];
    }
}
