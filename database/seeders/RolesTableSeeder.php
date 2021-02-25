<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
     /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_has_permissions')->delete();
        DB::table('model_has_roles')->delete();
        DB::table('roles')->delete();

        $roles = [
            'administrador',
            'cajera',
            'entregas'
        ];

        $permissionsAdmin = [
            'ver_usuarios', 'crear_usuarios', 'editar_usuarios', 'suspender_usuarios',
            'ver_roles', 'crear_roles', 'editar_roles', 'suspender_roles',
        ];

        foreach ($roles as $roles) {
            Role::create(['name' => $roles]);
        }

        $role = Role::findByName('administrador');
        $role->givePermissionTo($permissionsAdmin);
    }
}