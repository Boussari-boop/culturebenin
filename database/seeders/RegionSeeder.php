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
        Region::updateOrCreate(['nom_region' => 'Zou']);
        Region::updateOrCreate(['nom_region' => 'Atacora']);
        Region::updateOrCreate(['nom_region' => 'Couffo']);
        Region::updateOrCreate(['nom_region' => 'Mono']);
        Region::updateOrCreate(['nom_region' => 'Ouémé']);
        Region::updateOrCreate(['nom_region' => 'Plateau']);
        Region::updateOrCreate(['nom_region' => 'Borgou']);
        Region::updateOrCreate(['nom_region' => 'Natitingou']);
    }
}
