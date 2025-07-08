<?php

namespace Database\Seeders;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Crear permisos
         Permission::create(['name' => 'CREATE_HOTEL']);
         Permission::create(['name' => 'UPDATE_HOTEL']);
         Permission::create(['name' => 'READ_HOTEL']);
         Permission::create(['name' => 'DELETE_HOTEL']);
         Permission::create(['name' => 'CREATE_ROOMS']);
         Permission::create(['name' => 'UPDATE_ROOMS']);
         Permission::create(['name' => 'READ_ROOMS']);
         Permission::create(['name' => 'DELETE_ROOMS']);
         Permission::create(['name' => 'CREATE_RESERVATIONS']);
         Permission::create(['name' => 'UPDATE_RESERVATIONS']);
         Permission::create(['name' => 'READ_RESERVATIONS']);
         Permission::create(['name' => 'DELETE_RESERVATIONS']);
 
         // Crear roles y asignar permisos
         $adminRole = Role::create(['name' => 'admin']);
         $adminRole->givePermissionTo(['CREATE_HOTEL', 'UPDATE_HOTEL', 'READ_HOTEL', 'DELETE_HOTEL', 'CREATE_ROOMS', 'UPDATE_ROOMS', 'READ_ROOMS', 'DELETE_ROOMS', 'CREATE_RESERVATIONS', 'UPDATE_RESERVATIONS', 'READ_RESERVATIONS', 'DELETE_RESERVATIONS' ]);
 
         $userRole = Role::create(['name' => 'user']);
         $userRole->givePermissionTo(['READ_HOTEL', 'READ_ROOMS', 'CREATE_RESERVATIONS', 'UPDATE_RESERVATIONS', 'READ_RESERVATIONS', 'DELETE_RESERVATIONS']);
     
    }
}
