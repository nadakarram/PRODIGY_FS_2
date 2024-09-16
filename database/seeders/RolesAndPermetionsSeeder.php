<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermetionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(["name" =>"create_employee"]);
        Permission::create(["name" =>"delete_employee"]);
        Permission::create(["name" =>"update_employee"]);
        Permission::create(["name" =>"show_employee"]);
        $showemployee = Role::create(["name" => "employee"]);
        $showemployee->givePermissionTo(["show_employee"]);
        $employeeeditor = Role::create(["name" => "employeeeditor"]);
        $employeeeditor->givePermissionTo(["show_employee","create_employee","update_employee"]);
        $superemployee = Role::create(["name" => "superemployee"]);
        $superemployee->givePermissionTo(Permission::all());
    }
}
