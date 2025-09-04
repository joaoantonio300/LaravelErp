<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $modules = ['usuarios', 'movimentacoes', 'produtos', 'roles'];
        $actions = ['create', 'edit', 'delete', 'view'];

        foreach ($modules as $module) {
            foreach ($actions as $action) {
                Permission::firstOrCreate(['name' => "{$module}.{$action}"]);
            }
        }

        $viewOnlyModules = ['estoque', 'relatorios'];
        foreach ($viewOnlyModules as $module) {
            Permission::firstOrCreate(['name' => "{$module}.view"]);
        }
    }

}