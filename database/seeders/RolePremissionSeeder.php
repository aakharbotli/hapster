<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolePremissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Admin = Role::findOrCreate('Admin');

        $Capturer = Role::findOrCreate('Capturer');

        $Trainer = Role::findOrCreate('Trainer');



        foreach ( config('permission.capturer') as $permission) {
            Permission::findOrCreate($permission);
            $Capturer->givePermissionTo($permission);
        }

        foreach ( config('permission.admin') as $permission) {
            Permission::findOrCreate($permission);
            $Admin->givePermissionTo($permission);
        }

        foreach ( config('permission.trainer') as $permission) {
            Permission::findOrCreate($permission);
            $Trainer->givePermissionTo($permission);
        }
    }
}
