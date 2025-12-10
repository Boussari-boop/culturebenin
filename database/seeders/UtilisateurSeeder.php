<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Utilisateur;

class UtilisateurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password_hashed = Hash::make('Eneam123');
        Utilisateur::create([
            'nom'=>'Comlan',
            'prenom'=>'maurices',
            'sexe'=>'Macsulin',
            'email' => 'mauricescomlan@gmail.com',
            'password' => $password_hashed
        ]);
    }
}
