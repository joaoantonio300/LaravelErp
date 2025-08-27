<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produto>
 */
class ProdutoFactory extends Factory
{
    protected $model = Produto::class;

    public function definition(): array
    {
        return [
            'nome' => $this->faker->word,
            'preco' => $this->faker->randomFloat(2, 10, 500),
            'descricao' => $this->faker->sentence,
        ];
    }
}
