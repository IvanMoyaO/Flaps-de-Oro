<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_sadmin = Role::create(['name' => 'Super Admin']);
        $role_admin = Role::create(['name' => 'Delegado/a']);
        $role_delegation = Role::create(['name' => 'Subdelegado/a']);
        $role_staff = Role::create(['name' => 'Equipo Delegación']);
        $role_student = Role::create(['name' => 'Estudiante']);
        $role_proff = Role::create(['name' => 'Institucional']);


        $permission_master = Permission::create(['name' => '*.*']);

        $permission_bypass_upm_mail = Permission::create(['name' => 'bypass.vote']);
        $permission_bypass_upm_mail = Permission::create(['name' => 'bypass.email']);

        $role_sadmin->syncPermissions($permission_master);
    }
}
