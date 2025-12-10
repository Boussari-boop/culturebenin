<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::updateOrCreate(['nom_role' => 'Administrateur']);
        Role::updateOrCreate(['nom_role' => 'Moderateur']);
        Role::updateOrCreate(['nom_role' => 'Avocat']);
    }
}
