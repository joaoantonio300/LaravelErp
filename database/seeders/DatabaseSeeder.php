<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Produto;
use App\Models\Movimentacao;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
   
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
        ]);

        Produto::factory(10)->create();

        Movimentacao::factory(50)->create();
    }
}
