<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('model_has_permissions')->delete();
        DB::table('permissions')->delete();

        $permissions = [
            // Permisos de administrador
            'ver_usuarios', 'crear_usuarios', 'editar_usuarios', 'suspender_usuarios',
            'ver_roles', 'crear_roles', 'editar_roles', 'suspender_roles',
        ];


        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

    }

}
