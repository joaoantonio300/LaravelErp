<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Produto;
use App\Models\Movimentacao;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        $this->call([
            \Database\Seeders\PermissionSeeder::class,
        ]);

        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Administrador',
                'password' => bcrypt('12345678')
            ]
        );

        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        $adminRole->syncPermissions(Permission::all());

        $admin->assignRole($adminRole);

        User::factory(10)->create();
        User::factory()->create([
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
        ]);
        Produto::factory(10)->create();
        Movimentacao::factory(50)->create();
    }
}