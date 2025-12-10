<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Region;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Region::create(['nom_region' => 'Zou']);
        Region::create(['nom_region' => 'Atacora']);
        Region::create(['nom_region' => 'Couffo']);
        Region::create(['nom_region' => 'Mono']);
        Region::create(['nom_region' => 'Ouémé']);
        Region::create(['nom_region' => 'Plateau']);
        Region::create(['nom_region' => 'Borgou']);
        Region::create(['nom_region' => 'Natitingou']);
    }
}
